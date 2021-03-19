<?php

namespace Repository\User;

use Carbon\Carbon;
use App\Models\User;
use App\Models\UserOtp;
use Repository\BaseRepository;
use Illuminate\Support\Facades\Hash;

class OtpRepository extends BaseRepository
{

    public function model()
    {
        return UserOtp::class;
    }

    public function generateOtpForUser(User $user)
    {
        return $this->model()::create([
            'user_id'   => $user->id,
            'otp'       => $this->generateOtp(),
            'token'     => $this->genearateUniqueTokenForUser($user)
        ]);
    }

    public function verifyOtp($token, $otp): UserOtp
    {
        return $this->model()::where('token', $token)
            ->where('otp', $otp)
            ->first();
    }

    public function firstOrFailByToken($token): UserOtp
    {
        return $this->model()::where('token', $token)->firstOrFail();
    }

    protected function genearateUniqueTokenForUser(User $user)
    {
        $token = $this->generateTokenForUser($user);
        if ($this->model()::where('token', $token)->first()) {
            return $this->genearateUniqueTokenForUser($user);
        }
        return $token;
    }

    private function generateTokenForUser(User $user): string
    {
        return Hash::make($user->id . Carbon::now()->toString() . rand(2, 5));
    }

    protected function generateOtp(int $length1 = 1000, int $length = 9999): int
    {
        return rand($length1, $length);
    }
}
