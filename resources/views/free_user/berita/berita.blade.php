@extends('component.template_free_user')

@section('title', 'Beranda')

@section('content')
<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="inner-heading">
            <h2>Berita</h2>
          </div>
        </div>
        <div class="span8">
          <ul class="breadcrumb">
            <li><a href="/beranda"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
            <li><a href="/berita">berita</a><i class="icon-angle-right"></i></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="content">
    <div class="container">
      <div class="row">
        <div class="span4">
          <aside class="left-sidebar">
            <div class="widget">
              <form class="form-search">
                <input placeholder="Ketik untuk mencari" type="text" class="input-medium search-query">
                <button type="submit" class="btn btn-square btn-theme">Cari</button>
              </form>
            </div>
            {{-- <div class="widget">
              <h5 class="widgetheading">Katogori</h5>
              <ul class="cat">
                <li><i class="icon-angle-right"></i><a href="#">Berita Perusahaan</a><span> (20)</span></li>
                <li><i class="icon-angle-right"></i><a href="#">Acara dan Kegiatan</a><span> (11)</span></li>
                <li><i class="icon-angle-right"></i><a href="#">Layanan dan Produk Terbaru</a><span> (9)</span></li>
                <li><i class="icon-angle-right"></i><a href="#">Pencapaian dan Penghargaan</a><span> (12)</span></li>
                <li><i class="icon-angle-right"></i><a href="#">Inovasi dan Teknologi</a><span> (18)</span></li>
                <li><i class="icon-angle-right"></i><a href="#">Corporate Social Responsibility (CSR)</a><span> (18)</span></li>
              </ul>
            </div> --}}
            <div class="widget">
              <h5 class="widgetheading">Berita Terbaru</h5>
              <ul class="recent">
                <li>
                  <img src="/template-free-user/img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />
                  <h6><a href="#">Lorem ipsum dolor sit</a></h6>
                  <p>
                    Mazim alienum appellantur eu cu ullum officiis pro pri
                  </p>
                </li>
                <li>
                  <a href="#"><img src="/template-free-user/img/dummies/blog/65x65/thumb2.jpg" class="pull-left" alt="" /></a>
                  <h6><a href="#">Maiorum ponderum eum</a></h6>
                  <p>
                    Mazim alienum appellantur eu cu ullum officiis pro pri
                  </p>
                </li>
                <li>
                  <a href="#"><img src="/template-free-user/img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt="" /></a>
                  <h6><a href="#">Et mei iusto dolorum</a></h6>
                  <p>
                    Mazim alienum appellantur eu cu ullum officiis pro pri
                  </p>
                </li>
              </ul>
            </div>
            {{-- <div class="widget">
              <h5 class="widgetheading">Popular tags</h5>
              <ul class="tags">
                <li><a href="#">Web design</a></li>
                <li><a href="#">Trends</a></li>
                <li><a href="#">Technology</a></li>
                <li><a href="#">Internet</a></li>
                <li><a href="#">Tutorial</a></li>
                <li><a href="#">Development</a></li>
              </ul>
            </div> --}}
          </aside>
        </div>
        <div class="span8">
          <article>
            <div class="row">
              <div class="span8">
                <div class="post-slider">
                  <div class="post-heading">
                    <h3><a href="#">Ratna Education Membuka Cabang di Semarang</a></h3>
                  </div>
                  <!-- start flexslider -->
                  <div class="flexslider">
                    <ul class="slides">
                      <li>
                        <img src="/template-free-user/img/tempat-bimbel.jpg" alt="" />
                      </li>

                    </ul>
                  </div>
                  <!-- end flexslider -->
                </div>
                <p>
                  Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius
                  ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed.
                </p>
                <div class="bottom-article">
                  <ul class="meta-post">
                    <li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
                  </ul>
                  <a href="/berita/detail/1" class="pull-right">Baca selengkapnya <i class="icon-angle-right"></i></a>
                </div>
              </div>
            </div>
          </article>
          <div id="pagination">
            <span class="all">Page 1 of 3</span>
            <span class="current">1</span>
            <a href="#" class="inactive">2</a>
            <a href="#" class="inactive">3</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
