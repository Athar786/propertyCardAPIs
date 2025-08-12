<?php
if(!function_exists('sendResponse')){
    function sendResponse($statuscode, $message, $data = [],$collection = null)
    {
        
        $response = [];
        $pagination = [];
        if($collection && $collection->count() > 0) {
            $pagination = [
                'total' => $collection->total(),
                'count' => $collection->count(),
                'per_page' => $collection->perPage(),
                'current_page' => $collection->currentPage(),
                'total_pages' => $collection->lastPage(),
                'next_page_url' => $collection->nextPageUrl(),
                'prev_page_url' => $collection->previousPageUrl(),
                'next_page' => $collection->hasMorePages() ? $collection->currentPage() + 1 : null,
                'prev_page' => $collection->currentPage() > 1 ? $collection->currentPage() - 1 : null,
            ];
        }
        $response = [
            'success' => $statuscode,
            'message' => $message,
            'data' => $data ? $data : null,
        ];

        // Add pagination only if it's not empty
        if (!empty($pagination)) {
            $response['pagination'] = $pagination;
        }

        return response()->json($response);
    }
}

if (!function_exists('image')) {
    function image($image)
    {
        if($image) {
            return url("images/" . $image);
        } else {
            return asset('images/new/logo.png');
        }
    }
}

if(!function_exists('sendError')){
    function sendError($statuscode, $message,$error,$data=[],$status=400)
    {
        $response = [
            'code' => $statuscode,
            'message' => $message,
            'data'  => null,
            'error' => $error ? $error : null,
        ];

        return response()->json($response,$status);
    }
}
if(!function_exists('dateFun')){
    function dateFun($date)
    {
        $to = strtotime($date);
        $dateFormat = date("d M H:i",$to);
        return $dateFormat;
    }
}