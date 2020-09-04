<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Component Slug</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container mt-5">
    <div class="justify-content-center">
        <h1>Vue Component Slot Test</h1>
        <div id="app">
            <modal-component>
                <template v-slot:title>
                    Modal Title
                </template>
                <template v-slot:body>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, blanditiis!</p>
                </template>
                <template v-slot:close>
                    <span>Close</span>
                </template>
                <template v-slot:save>
                    <span>Save</span>
                </template>
                <template v-slot:toggle>
                    <span>Open Modal</span>
                </template>
            </modal-component>
        </div>
    </div>
</div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>