<?php

namespace App\View\Components;

class FlashMessage
{
    /**
     * Set message
     * @param $request
     * @param $theme
     * @param $title
     * @param $message
     */
    public static function setMessage($request, $theme, $title, $message)
    {
        $request->session()->flash('flash-message', view('components.flash-message')->with([
            'theme' => $theme,
            'title' => $title,
            'message' => $message,
        ])->render());
    }

    /**
     * @param $request
     * @return mixed
     */
    public static function getMessage($request)
    {
        $message = null;
        if ($request->session()->has('flash-message')) {
            $message = $request->session()->get('flash-message');
            $request->session()->forget('flash-message');
        }
        return $message;
    }
}
