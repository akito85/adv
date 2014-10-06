<div class="row">
    <div class="col-lg-6">
      <video class="img-responsive" preload='metadata' controls>
        <source src="../assets/video/0.mp4" type="video/mp4">
      </video>
    </div>
    <div class="col-lg-6">
      <video class="img-responsive" preload='metadata' controls>
        <source src="../assets/video/1.mp4" type="video/mp4">
      </video>
    </div>
    <div class="col-lg-6">
      <video class="img-responsive" preload='metadata' controls>
        <source src="../assets/video/2.mp4" type="video/mp4">
      </video>
    </div>
    <div class="col-lg-6">
      <video class="img-responsive" preload='metadata' controls>
        <source src="../assets/video/3.mp4" type="video/mp4">
      </video>
    </div>
    <div class="col-lg-6">
      <video class="img-responsive" preload='metadata' controls>
        <source src="../assets/video/4.mp4" type="video/mp4">
      </video>
    </div> 
<?php
$array_img[0] = "ALTERPRO_CORPORATE_IDENTITY.jpg";
$array_img[1] = "ALTERPRO_LOGO_DESIGN.jpg";
$array_img[2] = "Asuransi_Dayin_Mitra_Preview_A3.jpg";
$array_img[3] = "ASURANSI_WAHANA_TATA_ANNUAL_BOOK.jpg";
$array_img[4] = "AYLA_360_INTERIOR.jpg";
$array_img[5] = "before_after_HIACE.jpg";
$array_img[6] = "CAR_RETOUCHING.jpg";
$array_img[7] = "DAIHATSU_360_EXTERIOR.jpg";
$array_img[8] = "DAIHATSU_GRANMAX_360_INTERIOR.jpg";
$array_img[9] = "DAIHATSU_GRANMAX_PICKUP_360_INTERIOR.jpg";
$array_img[10] = "DAIHATSU_TERIOS_360_INTERIOR.jpg";
$array_img[11] = "DAIHATSU_XENIA_360_INTERIOR.jpg";
$array_img[12] = "DIGITAL_IMAGING_INTERIOR_MAZDA_2.jpg";
$array_img[13] = "DIGITAL_IMAGING_MIKE_LEWIS_PERSONAL_PHOTO.JPG";
$array_img[14] = "DIGITAL_IMAGING_SENAYAN_CITY_CAMPAIGN_1.jpg";
$array_img[15] = "DIGITAL_IMAGING_SENAYAN_CITY_CAMPAIGN_2.jpg";
$array_img[16] = "DIGITAL_IMAGING_SENAYAN_CITY_CAMPAIGN_3.jpg";
$array_img[17] = "EDELWEISS_CORPORATE_IDENTITY.jpg";
$array_img[18] = "ERDE_LOGO.jpg";
$array_img[19] = "HADYSON_LOGO_DESIGN.jpg";
$array_img[20] = "HARRIS_HOTEL_CAR_RETOUCHING.jpg";
$array_img[21] = "HIACE_LUXURY_CONCEPT_FOR_TAM.jpg";
$array_img[22] = "HIACE_MOTORIZED_PARTITION.gif";
$array_img[23] = "HONSHITSU_JAPANESE_RESTAURANT_Preview_Brochure.jpg";
$array_img[24] = "HONSHITSU_JAPANESE_RESTAURANT_Preview.jpg";
$array_img[25] = "HONSHITSU_JAPANESE_RESTAURANT_Preview_Menu_Book.jpg";
$array_img[26] = "HONSHITSU_JAPANESE_RESTAURANT__Preview_Uniform.jpg";
$array_img[27] = "HTC_PROMO_POSTER.jpg";
$array_img[28] = "IIMS_2014_VERTUE_CORP.jpg";
$array_img[29] = "JHONLIN_GROUP_PHOTOBOOK.jpg";
$array_img[30] = "LAMBORGHINI_CLUB_INDONESIA_PHOTOBOOK.jpg";
$array_img[31] = "LA_TERRA_BRANDING_CAR.jpg";
$array_img[32] = "LA_TERRA_CORPORATE_IDENTITY.jpg";
$array_img[33] = "MAKROWAVE_PRINTING.jpg";
$array_img[34] = "MECA_COMPANY_PROFILE.jpg";
$array_img[35] = "MECA_Divisions.jpg";
$array_img[36] = "MEGACOOLS_PACKAGING_LABEL_DESIGN.jpg";
$array_img[37] = "NAPPA_EDELWEISS_STIGMA_CATALOG_SPREAD.jpg";
$array_img[38] = "NAPPA_EDELWEISS_STIGMA_LEATHER_CATALOG.jpg";
$array_img[39] = "NES_CATALOG.jpg";
$array_img[40] = "ORIX_COMP_PROFILE_1.jpg";
$array_img[41] = "ORIX_COMP_PROFILE_2.jpg";
$array_img[42] = "ORIX_COMP_PROFILE_3.jpg";
$array_img[43] = "RADITYA_DIKA_PRODUCTIONS.jpg";
$array_img[44] = "RANCH_MARKET_ANNUAL_REPORT_ALT2.jpg";
$array_img[45] = "RANCH_MARKET_ANNUAL_REPORT_INSIDE.jpg";
$array_img[46] = "RANCH_MARKET_ANNUAL_REPORT.jpg";
$array_img[47] = "RAPIDKLIN_LOGO_DESIGN.jpg";
$array_img[48] = "SPRINGWORKS_LOGO_DESIGN.jpg";
$array_img[49] = "S&Q_LOGO_DESIGN.jpg";
$array_img[50] = "TCL_PRODUCT_BROCHURE_DESIGN.jpg";
$array_img[51] = "VERTUE_LOGO_DESIGN.jpg";
$array_img[52] = "VERTUE_WOLLSDORF_BANNER.jpg";

$img_dir = "../assets/img/gallery/";
  foreach($array_img as $file) {
?>
  <div class="col-xs-4 gal-height">
    <a id='gals' <?php echo "href='" . $img_dir . $file . "'" . "title=" . $file . ">" ?>
    <?php echo "<img class=\"img img-responsive\" src=\"" . $img_dir . $file . "\"" . "alt=\"" . $file . "\" />" ?>
    </a>
  </div>
<?php } ?>
</div>
