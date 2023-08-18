<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Resources\ErrorResource;
use App\Http\Resources\SuccessResource;
use App\Repository\UserRepositoryInterface;

class UserController extends Controller
{
    public function __construct(
        private readonly UserRepositoryInterface $userRepository
    )
    {
    }


    public function store(StoreUserRequest $request): SuccessResource
    {
        return SuccessResource::make([
            'message' => 'Success!',
            'data'    => $this->userRepository->create($request->validated())
        ]);
    }

    public function update(UpdateUserRequest $request, int $id): SuccessResource|ErrorResource
    {
        $user = $this->userRepository->find($id);
        if(!empty($user)) {
            $update = $this->userRepository->update($user->id,$request->validated());
            if($update) {
                return SuccessResource::make([
                    'message' => 'Success! User Updated!'
                ]);
            }
        }
        return ErrorResource::make([
            'message' => 'Error! User not found!'
        ]);
    }
}
