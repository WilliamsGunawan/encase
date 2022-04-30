{{--
    Copyright (c) 2022, Williams Gunawan, All rights reserved.
    This source code is licensed under the MIT-style license found in the
    LICENSE file in the root directory of this source tree. 
 --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Layout</title>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body class="flex flex-col h-screen">
    <div class="px-4 py-2">
        Toggler
    </div>
    <div class="flex flex-row flex-grow">
        <?php
            $sidebarObject = [
                [
                    'parent' => 'Parent 1',
                    'content' => [
                        'Child 1 1',
                        'Child 1 2'
                    ] 
                ],
                [
                    'parent' => 'Parent 2',
                    'content' => [
                        'Child 2 1',
                        'Child 2 2',
                    ] 
                ],
            ];
            ?>
        <div class="bg-pink-300 basis-2/12">
            <x-encase::collapsible-menu :sidebarObject="$sidebarObject"/>
        </div>
        <div class="basis-10/12 bg-blue-300">
            content
        </div>

        
    </div>
    

</body>
</html>