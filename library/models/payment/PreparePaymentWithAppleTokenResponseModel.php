<?php

class PreparePaymentWithAppleTokenResponseModel extends BaseResponseModel implements iBarionModel
{
    public $PaymentId;
    public $PaymentRequestId;
    public $Status;
    public $IsSuccessful;
    public $ThreeDSAuthClientData;
    public $TraceId;
    public $PaymentStatus;

    function __construct()
    {
        parent::__construct();
        $this->PaymentId = "";
        $this->PaymentRequestId = "";
        $this->Status = "";
        $this->IsSuccessful = "";
        $this->ThreeDSAuthClientData = "";
        $this->TraceId = "";
        $this->PaymentStatus = "";
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

            if ($this->Status === PaymentStatus::Succeeded) {
                $this->PaymentStatus = 40;
            }
        }
    }
}
