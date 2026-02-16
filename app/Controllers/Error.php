<?php

namespace App\Controllers;

use App\Core\Controller;

class Error extends Controller
{
    public function index($code = 404)
    {
        $this->displayError($code);
    }

    public function displayError($code)
    {
        $code = is_numeric($code) ? (int)$code : 500;
        http_response_code($code);

        $errorData = $this->getErrorMessages($code);

        $this->view('status/error', [
            'title'   => $code . ' - ' . $errorData['title'],
            'code'    => $code,
            'message' => $errorData['message']
        ]);
    }

    private function getErrorMessages($code)
    {
        $messages = [
            400 => [
                'title'   => $this->lang('bad_request_title', 'error'),
                'message' => $this->lang('bad_request_message', 'error')
            ],
            401 => [
                'title'   => $this->lang('unauthorized_title', 'error'),
                'message' => $this->lang('unauthorized_message', 'error')
            ],
            403 => [
                'title'   => $this->lang('forbidden_title', 'error'),
                'message' => $this->lang('forbidden_message', 'error')
            ],
            404 => [
                'title'   => $this->lang('not_found_title', 'error'),
                'message' => $this->lang('not_found_message', 'error')
            ],
            405 => [
                'title'   => $this->lang('method_not_allowed_title', 'error'),
                'message' => $this->lang('method_not_allowed_message', 'error')
            ],
            408 => [
                'title'   => $this->lang('request_timeout_title', 'error'),
                'message' => $this->lang('request_timeout_message', 'error')
            ],
            429 => [
                'title'   => $this->lang('too_many_requests_title', 'error'),
                'message' => $this->lang('too_many_requests_message', 'error')
            ],
            500 => [
                'title'   => $this->lang('internal_error_title', 'error'),
                'message' => $this->lang('internal_error_message', 'error')
            ],
            501 => [
                'title'   => $this->lang('not_implemented_title', 'error'),
                'message' => $this->lang('not_implemented_message', 'error')
            ],
            502 => [
                'title'   => $this->lang('bad_gateway_title', 'error'),
                'message' => $this->lang('bad_gateway_message', 'error')
            ],
            503 => [
                'title'   => $this->lang('service_unavailable_title', 'error'),
                'message' => $this->lang('service_unavailable_message', 'error')
            ],
            504 => [
                'title'   => $this->lang('gateway_timeout_title', 'error'),
                'message' => $this->lang('gateway_timeout_message', 'error')
            ],
        ];

        // Fallback
        return $messages[$code] ?? [
            'title'   => $this->lang('error_title', 'error'),
            'message' => $this->lang('error_message', 'error')
        ];
    }
}
