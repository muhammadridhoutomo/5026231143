<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rajagrafindo</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-y: auto;
            font-family: 'Outfit', sans-serif;
            text-align: center;
        }

        h5{
            font-size: 20px;
            color: white;
            font-weight: 500;
            text-align: center;
        }

        h6 {
            color: white;
            font-size: 18px;
            width: 100%;
            white-space: normal;
        }

        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
            background: linear-gradient(to bottom, #c21300, #780016);
        }

        .topbar {
            background-color: #2b2b2b99;
            width: 44px;
            height: 44px;
            border-radius: 22px;
            border: 0px;
            text-align: center;
            position: fixed;
            z-index: 100;
            transition: background-color 0.2s ease-in;
            border: 0;
        }

        .topbar:hover {
            background-color: #a0a0a04D;
        }


        .topbar i {
            color: white;
        }

        .nama {
          color: white;
        }

        .nama img{
            width: 18px;
            height: 18px;
            margin-left: 5px;
            margin-top: 5px;
        }

        .card {
      position: relative;
      background-color: transparent;
      color: white;
      border-radius: 25px;
      border:1px solid white;
      padding: 8px;
      text-decoration: none;
      transition: background-color 0.2s ease, color 0.3s ease;
    }

     .card img {
        height: 100%;
        width: 100%;
        border-radius: 20px;
     }

     .card i {
        display: flex;
        align-items: center;
     }

     .card:hover {
        background-color: white;
     }

     .card:hover h6{
        color: #780016;
     }

     .katalog-hover {
  transition: all 0.3s ease;
  background-color: transparent;
  color: white;
  border: 1px solid white;
}

.katalog-hover:hover {
  background-color: white;
  color: #8B1C13; /* warna merah marun */
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
  text-decoration: none;
}

.katalog-hover:hover div,
.katalog-hover:hover i {
  color: #8B1C13 !important;
}

a:hover {
  text-decoration: none;
}


    </style>
</head>
<body>
    <div class="fixed left-0 top-0 -z-[1] h-100 w-100 bg-cover">
        <div class="background relative h-full w-full"></div>
    </div>
    <div class="container text-center" style="max-width: 580px;">
        <div class="d-flex justify-content-end pt-4 pb-5 pr-3">
            <button id=topbarBtn class="topbar d-flex align-items-center justify-content-center">
                <i class="fas fa-ellipsis-h"></i>
            </button>
        </div>
    </div>
    <div class="container text-center mb-5" style="max-width: 580px;">
        <div class="d-flex flex-column align-items-center">
            <div class="mb-4">
                <img src="https://ugc.production.linktr.ee/m7RDQzooTqKeWyoUNATX_7nhVvj31PSiOjaKr?io=true&size=avatar-v3_0" alt="Profile Picture" class="rounded-circle" style="width: 100px;">
            </div>
            <div class="nama flex-col">
                <h5 class="font-weight-bold">PT RAJAGRAFINDO PERSADA</h5>
                <h6 class="">LAYANAN PUSTAKA TERINTEGRASI</h6>
            </div>
            <div class="nama flex-col">
                <h6 class="font-weight-bold mt-5">- DAFTAR WEBINAR -</h6>
                <h6 class="mt-5">___________________________</h6>
                <h6 class="font-weight-bold mt-5">- KATALOG -</h6>
                <h6 class="font-weight-bold mt-5">PT RajaGrafindo Persada</h6>
            </div>
        </div>
        <div class="d-flex flex-col justify-content-center" style="gap: 20px;">
            <a href="https://www.rajagrafindo.co.id/wp-content/uploads/2023/11/Katalog_PustakaMK.pdf" target="_blank" class="card mt-3 d-flex align-items-center ">
                <img class="align-items-center"src="https://ugc.production.linktr.ee/49f9d3ef-3e2b-4962-a24b-0c618b1bdab0_Katalog-PustakaMK-1.jpeg?io=true&size=thumbnail-stack-v1_0" alt="">
                <div class="d-flex flex-col mt-3 mb-2 ml-2">
                  <h6 class="text-left m-0 " >Katalog Mahkamah Konstitusi</h6>
                  <i class="fa-solid fa-ellipsis-vertical ml-2 mr-3 "></i>
                </div>
            </a>
            <a href="https://www.rajagrafindo.co.id/wp-content/uploads/2024/06/Katalog-Kepolisian-2024.pdf" target="_blank" class="card mt-3 d-flex align-items-center ">
              <img class="align-items-center"src="https://ugc.production.linktr.ee/2c0b7d03-6349-494d-aa78-ff830d4e5247_Katalog-Kepolisian-2024-1.jpeg?io=true&size=thumbnail-stack-v1_0" alt="">
              <div class="d-flex flex-col mt-3 mb-2 ml-2">
                <h6 class="text-left m-0 " >Katalog Corner Literasi Polris (1) </h6>
                <i class="fa-solid fa-ellipsis-vertical ml-2 mr-3 "></i>
              </div>
          </a>
        </div>
        <div class="d-flex flex-col justify-content-center" style="gap: 20px;">
          <a href="https://www.rajagrafindo.co.id/wp-content/uploads/2023/01/Katalog-Buku-Bank-Indonesia-2023.pdf" target="_blank" class="card mt-3 d-flex align-items-center ">
              <img class="align-items-center"src="https://ugc.production.linktr.ee/666d3169-d0b3-46da-bb4b-26087d83bef0_WhatsApp-Image-2024-11-20-at-11.39.20.jpeg?io=true&size=thumbnail-stack-v1_0" alt="">
              <div class="d-flex flex-col mt-3 mb-2 ml-2">
                <h6 class="text-left m-0 mr-3" >Katalog Bank Indonesia</h6>
                <i class="fa-solid fa-ellipsis-vertical ml-3 mr-1 "></i>
              </div>
          </a>
          <a href="https://www.rajagrafindo.co.id/wp-content/uploads/2024/06/Katalog-Kepolisian-2024.pdf" target="_blank" class="card mt-3 d-flex align-items-center ">
            <img class="align-items-center"src="https://ugc.production.linktr.ee/dc53e878-aa27-4b6c-acd5-e07d631b01e9_Katalog-Olahraga-2024-1.jpeg?io=true&size=thumbnail-stack-v1_0" alt="">
            <div class="d-flex flex-col mt-3 mb-2 ml-2">
              <h6 class="text-left m-0 mr-5" >Katalog Olah Raga</h6>
              <i class="fa-solid fa-ellipsis-vertical ml-2 mr-3 "></i>
            </div>
        </a>
      </div>
       <div class="d-flex flex-col justify-content-center mb-4" style="gap: 20px;">
            <a href="https://www.rajagrafindo.co.id/wp-content/uploads/2024/06/KATALOG-Universitas-Pendidikan-Ganesha-2024.pdf" target="_blank" class="card mt-3 d-flex align-items-center ">
                <img class="align-items-center"src="https://ugc.production.linktr.ee/733a4f05-4257-4312-82c6-4d2a08cefb37_Katalog-Undiksa-1.jpeg?io=true&size=thumbnail-stack-v1_0" alt="">
                <div class="d-flex flex-col mt-3 mb-2 ml-2">
                  <h6 class="text-left m-0 " >Katalog Pendidikan Ganesha</h6>
                  <i class="fa-solid fa-ellipsis-vertical ml-2 mr-3 "></i>
                </div>
            </a>
            <a href="https://drive.google.com/file/d/1ECMYS28eGuqbZjP5d3NAwM5VgeyBGod8/view" target="_blank" class="card mt-3 d-flex align-items-center ">
              <img class="align-items-center"src="https://ugc.production.linktr.ee/0c18588f-eb6f-4002-b0b7-4cbe162e61c8_1.jpeg?io=true&size=thumbnail-stack-v1_0" alt="">
              <div class="d-flex flex-col mt-3 mb-2 ml-2">
                <h6 class="text-left m-0 " >Katalog Universitas Negeri padang </h6>
                <i class="fa-solid fa-ellipsis-vertical ml-2 mr-3 "></i>
              </div>
          </a>
        </div>

    <a href="https://www.rajagrafindo.co.id/wp-content/uploads/2024/12/KATALOG-BUKU-RAJAWALI-PERS-2025.pdf"
       target="_blank"
       class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-2 mb-3 katalog-hover">
        <div class="d-flex flex-row align-items-center justify-content-between">
          <div class="rounded-circle overflow-hidden" style="width: 46px; height: 46px; flex-shrink: 0">
            <img src="https://ugc.production.linktr.ee/6bcdce62-911d-4383-9b47-861135567a95_Katalog-2025.jpeg?io=true&size=thumbnail-stack-v1_0"
                  alt=""
                  style="
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                    display: block;
                  "
                  />
              </div>
              <div class="align-item-center mr-4 small">KATALOG 2025</div>
              <div>
                <i class="fa-solid fa-ellipsis-vertical mr-3 " style="font-size: 15px;"></i>
              </div>
            </div>
          </a>
    <a href="https://drive.google.com/drive/folders/1ZA9PAlZokRYyIoxnLIHYW6DFdEaGu3Ps"
       target="_blank"
       class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-2 katalog-hover">
        <div class="d-flex flex-row align-items-center justify-content-between">
          <div class="rounded-circle overflow-hidden" style="width: 46px; height: 46px; flex-shrink: 0">
            <img src="https://ugc.production.linktr.ee/315e6118-0506-47cd-acb9-15342027ab2f_Katalog-Buku-TEMATIK-copy.jpeg?io=true&size=thumbnail-stack-v1_0"
                  alt=""
                  style="
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                    display: block;
                  "
                  />
              </div>
              <div class="align-item-center mr-4 small">KATALOG TEMATIK</div>
              <div>
                <i class="fa-solid fa-ellipsis-vertical mr-3 " style="font-size: 15px;"></i>
              </div>
            </div>
          </a>




        <!-- // -->
        <div class="link-container-title text-center text-white font-weight-bold mb-3 mt-4">
          -DAPATKAN BUKU KAMI-
        </div>
        <div>
          <a href="https://linktr.ee/belicepatrgp"
          target="_blank"
          class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-2 mb-3 katalog-hover">
           <div class="d-flex flex-row align-items-center justify-content-between">
             <div class="rounded-circle overflow-hidden" style="width: 46px; height: 46px; flex-shrink: 0">
               <img src="https://ugc.production.linktr.ee/pByAFOHFRmKim15X7Jno_p7f8td4d90eLfDl6?io=true&size=thumbnail-stack-v1_0"
                     alt=""
                     style="
                       width: 100%;
                       height: 100%;
                       object-fit: contain;
                       display: block;
                     "
                     />
                 </div>
                 <div class="align-item-center mr-4 small">Sales Marketing</div>
                 <div>
                   <i class="fa-solid fa-ellipsis-vertical mr-3 " style="font-size: 15px;"></i>
                 </div>
               </div>
             </a>
    <a href="https://www.rajagrafindo.co.id/"
          target="_blank"
          class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-2 katalog-hover">
           <div class="d-flex flex-row align-items-center justify-content-between">
             <div class="rounded-circle overflow-hidden" style="width: 46px; height: 46px; flex-shrink: 0">
               <img src="https://ugc.production.linktr.ee/AqOokj4RWG7a9zyQ63dg_vzhK3Ob9VSyjscr9?io=true&size=thumbnail-stack-v1_0"
                     alt=""
                     style="
                       width: 100%;
                       height: 100%;
                       object-fit: contain;
                       display: block;
                     "
                     />
                 </div>
                 <div class="align-item-center mr-4 small">Website</div>
                 <div>
                   <i class="fa-solid fa-ellipsis-vertical mr-3 " style="font-size: 15px;"></i>
                 </div>
               </div>
             </a>
    <a href="https://shopee.co.id/rajagrafindopersada"
       target="_blank"
       class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-2 mb-3 katalog-hover">
        <div class="d-flex flex-row align-items-center justify-content-between">
          <div class="rounded-circle overflow-hidden" style="width: 46px; height: 46px; flex-shrink: 0">
            <img src="https://ugc.production.linktr.ee/f7VDOTwTUGhr1WCrn4oA_mbP6cdqfaISBuN6f?io=true&size=thumbnail-stack-v1_0"
                  alt=""
                  style="
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                    display: block;
                  "
                  />
              </div>
              <div class="align-item-center mr-4 small">Shopee Mall</div>
              <div>
                <i class="fa-solid fa-ellipsis-vertical mr-3 " style="font-size: 15px;"></i>
              </div>
            </div>
          </a>
    <a href="https://www.tokopedia.com/rajawalipers"
       target="_blank"
       class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-2 katalog-hover">
        <div class="d-flex flex-row align-items-center justify-content-between">
          <div class="rounded-circle overflow-hidden" style="width: 46px; height: 46px; flex-shrink: 0">
            <img src="https://ugc.production.linktr.ee/2346bd1d-2ea2-4195-94ff-5d85683a7b96_tokopedia-logo-png-seeklogo-339743.png?io=true&size=thumbnail-stack-v1_0"
                  alt=""
                  style="
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                    display: block;
                  "
                  />
              </div>
              <div class="align-item-center mr-4 small">Tokopedia</div>
              <div>
                <i class="fa-solid fa-ellipsis-vertical mr-3 " style="font-size: 15px;"></i>
              </div>
            </div>
          </a>

  <div class="link-container-title text-center text-white font-weight-bold mb-3 mt-4">
            -JOIN MITRA-
          </div>
          <div>
            <a href="http://linktr.ee/rgpreseller"
            target="_blank"
            class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-2 mb-3 katalog-hover">
             <div class="d-flex flex-row align-items-center justify-content-between">
               <div class="rounded-circle overflow-hidden" style="width: 46px; height: 46px; flex-shrink: 0">
                 <img src="https://ugc.production.linktr.ee/nkSPhvrT8aQxisnpK5QJ_hand-shake-hands-handshake-flat-260nw-1677048553.jpg?io=true&size=thumbnail-stack-v1_0"
                       alt=""
                       style="
                         width: 100%;
                         height: 100%;
                         object-fit: contain;
                         display: block;
                       "
                       />
                   </div>
                   <div class="align-item-center mr-4 small">Join Reseller</div>
                   <div>
                     <i class="fa-solid fa-ellipsis-vertical mr-3 " style="font-size: 15px;"></i>
                   </div>
                 </div>
               </a>


    <div class="link-container-title text-center text-white font-weight-bold mb-3 mt-4">
      DAPATKAN BUKU KAMI-
      </div>
        <div>
          <a href="https://api.whatsapp.com/send/?phone=6281222770984&text&type=phone_number&app_absent=0"
              target="_blank"
              class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-2 mb-3 katalog-hover">
               <div class="d-flex flex-row align-items-center justify-content-between">
                 <div class="rounded-circle overflow-hidden" style="width: 46px; height: 46px; flex-shrink: 0">
                   <img src="https://ugc.production.linktr.ee/N8yH4w0fQFmCGTbqvuZO_3Y92r8FS5dc49HO5?io=true&size=thumbnail-stack-v1_0"
                         alt=""
                         style="
                           width: 100%;
                           height: 100%;
                           object-fit: contain;
                           display: block;
                         "
                         />
                     </div>
                     <div class="align-item-center mr-4 small">Terbitkan dan Cetak Buku</div>
                     <div>
                       <i class="fa-solid fa-ellipsis-vertical mr-3 " style="font-size: 15px;"></i>
                     </div>
                   </div>
                 </a>
                  <div>
                    <i class="bi bi-three-dots-vertical"></i>
                  </div>
                </div>
              </a>
              <a href="https://api.whatsapp.com/send/?phone=6281262373947&text&type=phone_number&app_absent=0"
              target="_blank"
              class="btn btn-transparant btn-lg btn-block border-white text-white rounded-pill px-2 py-2 my-2 katalog-hover">
               <div class="d-flex flex-row align-items-center justify-content-between">
                 <div class="rounded-circle overflow-hidden" style="width: 46px; height: 46px; flex-shrink: 0">
                   <img src="https://ugc.production.linktr.ee/iI1r7jQFT2IaMFiIzdYw_956N644bUI41P7oR?io=true&size=thumbnail-stack-v1_0"
                         alt=""
                         style="
                           width: 100%;
                           height: 100%;
                           object-fit: contain;
                           display: block;
                         "
                         />
                     </div>
                     <div class="align-item-center mr-4 small">Bikin kegiatan akademis?</div>
                     <div>
                       <i class="fa-solid fa-ellipsis-vertical mr-3 " style="font-size: 15px;"></i>
                     </div>
                   </div>
                 </a>
        </div>
        <div class="footer d-flex flex-col justify-content-center mt-4">
          <a href="https://www.facebook.com/rajagrafindo?_rdc=1&_rdr" target="_blank">
            <img src="image/facebook.png" style="width: 32px; height: 32px; margin: 0.5rem; filter: brightness(0) invert(1);" alt="Facebook">
          </a>
          <a href="https://www.instagram.com/rajagrafindopersada" target="_blank">
            <img src="image/instagram.png" style="width: 32px; height: 32px; margin: 0.5rem; filter: brightness(0) invert(1);" alt="Instagram">
          </a>
          <a href="https://www.youtube.com/channel/UCl4bTWF_GIYFXXEPd5ftwcw?view_as=subscriber" target="_blank">
            <img src="image/youtube.png" style="width: 32px; height: 32px; margin: 0.5rem; filter: brightness(0) invert(1);" alt="YouTube">
          </a>
          <a href="https://api.whatsapp.com/send?phone=6287832055211" target="_blank">
            <img src="image/whatsapp.png" style="width: 32px; height: 32px; margin: 0.5rem; filter: brightness(0) invert(1);" alt="WhatsApp">
          </a>
        </div>

</body>
</html>
