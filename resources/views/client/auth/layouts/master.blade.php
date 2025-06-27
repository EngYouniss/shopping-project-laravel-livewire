<!DOCTYPE html>


<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{asset('admin/assets')}}"
  data-template="vertical-menu-template-free"
>
  @include('client.auth.partials.header')

  <body>
    <!-- Content -->
{{$slot}}

    <!-- / Content -->

    <!-- Core JS -->
   @include('client.auth.partials.scripts')
  </body>
</html>

