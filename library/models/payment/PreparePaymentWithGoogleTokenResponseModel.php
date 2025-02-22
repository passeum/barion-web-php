<?php

/**
 * Copyright 2016 Barion Payment Inc. All Rights Reserved.
 * <p/>
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * <p/>
 * http://www.apache.org/licenses/LICENSE-2.0
 * <p/>
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
class PreparePaymentWithGoogleTokenResponseModel extends BaseResponseModel implements iBarionModel
{
    public $PaymentId;
    public $PaymentRequestId;
    public $Status;
    public $IsSuccessful;
    public $ThreeDSAuthClientData;
    public $TraceId;

    function __construct()
    {
        parent::__construct();
        $this->PaymentId = "";
        $this->PaymentRequestId = "";
        $this->Status = "";
        $this->IsSuccessful = "";
        $this->ThreeDSAuthClientData = "";
        $this->TraceId = "";
    }

    public function fromJson($json)
    {
        if (!empty($json)) {
            parent::fromJson($json);
            $this->PaymentId = jget($json, 'PaymentId');
            $this->PaymentRequestId = jget($json, 'PaymentRequestId');
            $this->Status = jget($json, 'PaymentStatus');
            $this->IsSuccessful = jget($json, 'IsSuccessful');
            $this->ThreeDSAuthClientData = jget($json, 'ThreeDSAuthClientData');
            $this->TraceId = jget($json, 'TraceId');

        }
    }
}
