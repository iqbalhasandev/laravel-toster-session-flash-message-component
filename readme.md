## About <a href="javascript:void();" target="_blank">Laravel Toster Session Flash Message Component</a>

DToster Session Flash Message Components For Laravel Project

## Doc:

<hr/>

- first copy plugins and js folder then paste it on public folder

- Then Link those Js and css file to your layouts/app.blade

        - For Css
            ```
            <link rel="stylesheet" href="{{ asset('plugins/toastr.min.css') }}">
            ```
        - For Js
            ```
            <script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
            <script src="{{asset('js/toster-session.js')}}"></script>

            ```

- then copy components/toster-session.blade.php and paste it on resource/views/components folder.

- For use This Componet use those Line to your layout file

  ```
  {{-- call It for once time --}}
  <x-toster-session>
  ```

```

## <a href="https://iqbalhasan.dev" target="_blank">iqbalhasan.dev</a> Sponsors

We would like to extend our thanks to the following sponsors for funding <a href="https://iqbalhasan.dev" target="_blank">iqbalhasan.dev</a> development. If you are interested in becoming a sponsor, please email us <a href="mailto:info@iqbalhasan.dev">info@iqbalhasan.dev</a>

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to <a href="https://iqbalhasan.dev" target="_blank">IQBAL HASAN</a> via [info@iqbalhasan.dev](mailto:info@iqbalhasan.dev). All security vulnerabilities will be promptly addressed.

## License

The iqbalhasan.dev Project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

```

```

```
