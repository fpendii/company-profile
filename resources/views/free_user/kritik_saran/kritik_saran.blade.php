@extends('component.template_free_user')

@section('title', 'Beranda')

@section('content')
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2 style="font-size: 40px">Kritik dan Saran</h2>
                </div>
            </div>
            <div class="span8">
                <ul class="breadcrumb">
                    <li><a href="/beranda"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                    <li><a href="/kritik-saran">Kritik dan Saran</a><i class="icon-angle-right"></i></li>
                </ul>
            </div>
        </div>
    </div>
</section>
    <!-- Spacer antara baris -->
    <div style="height: 50px;"></div>
<div class="container">
    <div class="row">
      <div class="span12">
        <h4>Hubungi kami dengan mengisi formulir kontak di bawah ini</h4>

        <form action="" method="post" role="form" class="contactForm">
          <div id="sendmessage">Pesan anda telah terkirim!</div>
          <div id="errormessage">Maap, terjadi kesalahan. Silahkan coba lagi.</div>

          <div class="row">
            <div class="span4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="span4 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="span4 form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="span12 margintop10 form-group">
              <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Pesan"></textarea>
              <div class="validation"></div>
              <p class="text-center">
                <button class="btn btn-large btn-theme margintop10" type="submit">Kirim Email</button>
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
