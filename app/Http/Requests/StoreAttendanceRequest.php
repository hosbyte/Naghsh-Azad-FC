<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAttendanceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'academy_team_id' => [
                'required',
                'integer',
                'exists:academy_teams,id',
            ],

            'player_id' => [
                'required',
                'integer',
                'exists:players,id',
            ],

            'attendance_date' => [
                'required',
                'date',
            ],

            'status' => [
                'required',
                Rule::in([
                    'present',
                    'absent',
                ]),
            ],

            'late_minutes' => [
                'required',
                'integer',
                'min:0',
            ],

            'recorded_by' => [
                'required',
                'integer',
                'exists:users,id',
            ],
        ];
    }

    public function withValidator($validator): void
    {
        $validator->after(function ($validator) {
            $teamId = $this->academy_team_id;
            $playerId = $this->player_id;
            $status = $this->status;
            $lateMinutes = (int) $this->late_minutes;

            /*
             * بازیکن باید متعلق به همان تیم باشد.
             */
            if (
                $teamId &&
                $playerId &&
                ! \App\Models\Player::where('id', $playerId)
                    ->where('academy_team_id', $teamId)
                    ->exists()
            ) {
                $validator->errors()->add(
                    'player_id',
                    'بازیکن انتخاب‌شده متعلق به این تیم نیست.'
                );
            }

            /*
             * بازیکن غایب نمی‌تواند زمان تأخیر داشته باشد.
             */
            if ($status === 'absent' && $lateMinutes !== 0) {
                $validator->errors()->add(
                    'late_minutes',
                    'برای بازیکن غایب، میزان تأخیر باید صفر باشد.'
                );
            }
        });
    }
}