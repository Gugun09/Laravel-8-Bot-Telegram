<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" href="{{ asset('icon/pisces.png') }}">
        <link rel="stylesheet" href="{{ asset('toasts/css/iziToast.min.css') }}" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <script src="{{ asset('toasts/js/iziToast.min.js') }}"></script>
        <script>
            const SwalModal = (icon, title, html) => {
                Swal.fire({
                    icon,
                    title,
                    html
                })
            }

            const SwalConfirm = (icon, title, html, confirmButtonText, method, params, callback) => {
                Swal.fire({
                    icon,
                    title,
                    html,
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText,
                    reverseButtons: true,
                }).then(result => {
                    if (result.value) {
                        return livewire.emit(method, params)
                    }

                    if (callback) {
                        return livewire.emit(callback)
                    }
                })
            }

            const SwalAlert = (icon, title, timeout = 7000) => {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    progressBar: true,
                    timer: timeout,
                    onOpen: toast => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon,
                    title
                })
            }

            const IzIAlert = (icon, title, message) => {
                iziToast.success({
                title,
                message,
                position: 'topRight',
                progressBarColor: 'rgb(0, 255, 184)',
            })
            }

            document.addEventListener('DOMContentLoaded', () => {
                this.livewire.on('swal:modal', data => {
                    SwalModal(data.icon, data.title, data.text)
                })

                this.livewire.on('swal:confirm', data => {
                    SwalConfirm(data.icon, data.title, data.text, data.confirmText, data.method, data.params, data.callback)
                })

                this.livewire.on('swal:alert', data => {
                    SwalAlert(data.icon, data.title, data.timeout)
                })

                this.livewire.on('swal:izialert', data => {
                    IzIAlert(data.icon, data.title, data.message)
                })
            })
        </script>
    </body>
</html>
