<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e)
    {
        $msg = $e->getMessage();
        $status = $e->getCode()==200?2:0;
        if(config('app.debug') == false && $status == 0) {
            $msg = "Something went wrong";
        }
        if($request->ajax()) {
            $response = [
                'status' => 0,
                'msg' => $msg
            ];
            $status = $e->getCode()==0?500:$e->getCode();
            
            return response()->json($response, $status);
        }

        return parent::render($request, $e);
    }
}
