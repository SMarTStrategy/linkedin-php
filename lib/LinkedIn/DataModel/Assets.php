<?php

declare(strict_types=1);

namespace SMarT\LinkedIn\DataModel;

class Assets extends Model
{
    /**
     * @var RegisterUploadRequest
     */
    private $registerUploadRequest;

    /**
     * @return RegisterUploadRequest
     */
    public function getRegisterUploadRequest(): RegisterUploadRequest
    {
        return $this->registerUploadRequest;
    }

    /**
     * @param RegisterUploadRequest $registerUploadRequest
     * @return Assets
     */
    public function setRegisterUploadRequest(RegisterUploadRequest $registerUploadRequest): Assets
    {
        $this->registerUploadRequest = $registerUploadRequest;

        return $this;
    }
}
