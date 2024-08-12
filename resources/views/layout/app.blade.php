<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Add Scripts --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.5.2.min.js" integrity="sha256-ocUeptHNod0gW2X1Z+ol3ONVAGWzIJXUmIs+4nUeDLI=" crossorigin="anonymous"></script>
    <title>{{env('APP_NAME')}}</title>
</head>
<body>
    {{-- Include the Header --}}
    @Include('includes.header')

    {{-- yield Content --}}
    <div class="container max-w-[1200px] mx-auto">
        @yield('content')
    </div>

    <div id="CustomPopupContainer" class="translate-x-[150%] fixed top-10 right-5 shadow-lg z-50 transition-all ease-in-out duration-150">
        @if (!empty($errors->any()) || !empty(session('status')))
                
            @if ($errors->any())
                <div id="CustomPopup" class="{{ $errors->any() ? 'bg-red-500' : (session('status') ? 'bg-green-500' : '') }} text-white px-4 py-2 rounded relative">
                    @foreach ($errors->all() as $message)
                    <span class="text-white"> {{ $message }} </span><br>
                    @endforeach
                </div>
            @endif        
            @if (!empty(session('status')))
            <div id="CustomPopup" class="{{ $errors->any() ? 'bg-red-500' : (session('status') ? 'bg-green-500' : '') }} text-white px-4 py-2 rounded relative">
                <span class="text-white">{{ session('status') }}</span>
            </div>
            @endif      
            <div id="progressBar" class="absolute bottom-0 left-0 h-1 duration-[5s] transition-[width] w-full bg-white ease-linear"></div>
        @endif
    </div>
    <script>
        $(document).ready(function() {
        const $errorPopup = $('#CustomPopupContainer');
        const $progressBar = $('#progressBar');
    
        if ($errorPopup.html().trim().length > 0) {
           $errorPopup.removeClass("translate-x-[150%]");
           $errorPopup.addClass("translate-x-0");
           startProgressBar();
        }
        $(".error-popup-close").on('click',function(){
            $errorPopup.removeClass("translate-x-0");
            $errorPopup.addClass("translate-x-[150%]");
    
            // Wait for 500ms and then remove the content inside $errorPopup
            setTimeout(function() {
                $errorPopup.empty(); // Removes the content inside the popup
            }, 500);
        })
        function startProgressBar() {
            $progressBar.css("width", "0%"); // Start filling the progress bar
            setTimeout(function() {
                $errorPopup.removeClass("translate-x-0").addClass("translate-x-[150%]");
                $progressBar.stop().css("width", "100%"); // Stop the progress bar animation
                setTimeout(function() {
                    $errorPopup.empty(); // Removes the content inside the popup
                    $progressBar.remove(); // Remove progress bar element
                }, 500);
            }, 5000); // Progress bar duration
        }
    });
    </script>
    


</body>
</html>