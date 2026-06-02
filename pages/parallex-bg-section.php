   <style>
     /*************************************** Parallex BG Section ************************************/
     #section-fab6b0ea-4d35-4bc0-be59-487364e0cb5f {
       color: #000;
       position: relative;
       overflow: hidden;
       min-height: 65vh;
       height: 100%;
       background-color: #000;
       background-image: none;
       --bgColor_darkenDir: -1;
       --global-section-padding: 96px;
       --section-padding-top: calc(2 / 4 * var(--global-section-padding));
       --section-padding-bottom: calc(0 / 4 * var(--global-section-padding));
     }

     #section-fab6b0ea-4d35-4bc0-be59-487364e0cb5f .video-bg {

       position: absolute;
       inset: 0;
       overflow: hidden;
       z-index: 0;
     }

     #section-fab6b0ea-4d35-4bc0-be59-487364e0cb5f .video-bg video {
       position: absolute;
       top: 50%;
       left: 50%;
       min-width: 100%;
       min-height: 100%;
       width: auto;
       height: auto;
       transform: translate(-50%, -50%);
       object-fit: cover;
     }

     #section-fab6b0ea-4d35-4bc0-be59-487364e0cb5f .video-overlay {
       position: absolute;
       inset: 0;
       background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8));
       z-index: 1;
     }

     #section-fab6b0ea-4d35-4bc0-be59-487364e0cb5f .boxed-text {
       position: relative;
       z-index: 2;
     }

     #section-fab6b0ea-4d35-4bc0-be59-487364e0cb5f>div:last-child {
       padding-top: calc(2 / 4 * var(--global-section-padding)) !important;
       padding-bottom: calc(0 / 4 * var(--global-section-padding)) !important;
     }

     #section-fab6b0ea-4d35-4bc0-be59-487364e0cb5f .redesign {
       font-smooth: always;
       -webkit-font-smoothing: antialiased;
       -moz-osx-font-smoothing: grayscale;
       font-size: 16px;
       letter-spacing: 1px;
       line-height: 1.6;
       scroll-behavior: smooth;
     }

     #section-fab6b0ea-4d35-4bc0-be59-487364e0cb5f .lp-container {
       margin-left: auto;
       margin-right: auto;
       max-width: 1400px;
       padding-left: 50px;
       padding-right: 50px;
       /* width: 100%; */
       padding-block: 12px;
     }

     #section-fab6b0ea-4d35-4bc0-be59-487364e0cb5f .boxed-text__description {
       margin-bottom: 50px;
       text-align: center;
     }

     #section-fab6b0ea-4d35-4bc0-be59-487364e0cb5f h2 {
       font-size: 44px;
       line-height: 2;
     }

     #section-fab6b0ea-4d35-4bc0-be59-487364e0cb5f h4 {
       line-height: 3;
     }

     #section-fab6b0ea-4d35-4bc0-be59-487364e0cb5f .redesign p {
       margin-bottom: 1.666rem;

     }
   </style>

   <!---------------------------------- parallex bg section ---------------------------------->
   <section
     class="image-section is-font-color-dark is-background-color-light"
     id="section-fab6b0ea-4d35-4bc0-be59-487364e0cb5f"
     data-el-id="21c5a117-61cb-4f43-8635-2da86e3ae7dd">
     <div class="video-bg">
       <video autoplay muted loop playsinline preload="auto">
         <source src="./assets/video/task3 final ok.mp4" type="video/mp4">
         Your browser does not support the video tag.
       </video>
     </div>
     <div class="video-overlay"></div>
     <div class="boxed-text lp-vertical-paddings redesign">
       <div class="lp-container">
         <div class="boxed-text__description">
           <p>&nbsp;</p>
           <p>&nbsp;</p>

           <h4>Strategic Location. Global Potential.&nbsp;</h4>
           <h2>Be Part of Gwadar’s Next Chapter </h2>
         </div>
       </div>
     </div>
   </section>
   <!---------------------------------- parallex bg section ends ---------------------------------->