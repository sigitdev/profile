<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigit Wahyu Wibowo</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/aos-master/dist/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="asset/style.css">
</head>

<body>
    <div class="background-hero">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="section-about" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
        <div class="container">
            <div class="row">
                <div class="col-md-6 section-about-image">
                    <img src="asset/images/sigit.jpeg" alt="" class="shadow">
                </div>
                <div class="col-md-6">
                    <div class="section-about-text">
                        <div>Hi!. I Am Sigit Wahyu Wibowo</div>
                        <div>A Web Developer !</div>
                        <div>Indonesia</div>
                        <div>Graduated From Muhammadiyah Sidoarjo University <br> in 2016</div>
                        <div>"Seeing, Speaking, Showing"</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-experience container">
        <div class="sc-exp-background">
            <div></div>
            <div></div>
            <div class="star"><i class="bi bi-star"></i></div>
        </div>
        <div class="sc-exp-body">
            <div class="row g-0">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
                    <div class="text-start">
                        <h3 style="color: #4fd6b7;">Work Experience</h3>
                    </div>
                    <div class="text-start" style="margin-top:30px">
                        <div style="font-size: 12px; color:grey">2023 July - Present</div>
                        <div style="font-size:30px">PT Micronet Gigatech Indoglobal</div>
                        As Software Team Lead.
                    </div>
                    <div class="text-start" style="margin-top:30px">
                        <div style="font-size: 12px; color:grey">2022 October - 2023 June</div>
                        <div style="font-size:30px">PT Indraco Global Indonesia</div>
                        As Web Developer.
                    </div>
                    <div class="text-start" style="margin-top:30px">
                        <div style="font-size: 12px; color:grey">2016 December - 2022 September</div>
                        <div style="font-size:30px">PT Micronet Gigatech Indoglobal</div>
                        As Web Developer.
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-offset="700" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
                    <div class="text-start" style="margin-top: 200px;">
                        <h3 style="color: #4fd6b7;">My Portofolio, Some of Them</h3>
                    </div>
                    <div class="text-start" data-id='1' onclick="showPorto(this)">
                        <div style="font-size:50px">e-IKA</div>
                        Work Instruction Document Builder
                        <div style="font-size: 12px;color:grey">Laravel | MySQL | Bootstrap</div>
                    </div>
                    <div class="text-start" data-id='2' onclick="showPorto(this)" style="margin-top:30px">
                        <div style="font-size:50px">Cosmo Sender</div>
                        Web Base Application for Blasting Email and Email Content Management
                        <div style="font-size: 12px;color:grey">Vanilla PHP | MySQL | Bootstrap</div>
                    </div>
                    <div class="text-start" data-id='3' onclick="showPorto(this)" style="margin-top:30px">
                        <div style="font-size:50px">Supresso DSS</div>
                        DSS (Discount Scheduling Service) Web Base Application to configure discount to any product in Supresso Online Store. triggered an schedule to update in one event configured
                        <div style="font-size: 12px;color:grey">Vanilla PHP | MySQL | Bootstrap</div>
                    </div>
                    <div class="text-start" data-id='4' onclick="showPorto(this)" style="margin-top:30px">
                        <div style="font-size:50px">Supresso Online Store</div>
                        Web Store for Supresso Brand
                        <div style="font-size: 12px;color:grey">Laravel | MySQL | Bootstrap</div>
                    </div>
                    <div class="text-start" data-id='5' onclick="showPorto(this)" style="margin-top:30px">
                        <div style="font-size:50px">E-Farming</div>
                        Web Base Application for Sugarcane Field Registration and GIS for Monitoring
                        <div style="font-size: 12px;color:grey">Java | Postgresql | Geoserver | Struts | Hibernate | Open Layer | Bootstrap</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sosmed-nav">
        <ul>
            <li><i class="bi bi-instagram"></i></li>
            <li><i class="bi bi-threads"></i></li>
            <li><i class="bi bi-github"></i></li>
        </ul>
        <div></div>
    </div>
    <div style="height: 100vh;width:100%"></div>
    <script src="asset/jquery.min.js"></script>
    <script src="asset/bootstrap/js/bootstrap.min.js"></script>
    <script src="asset/aos-master/dist/aos.js"></script>
    <script>
        var listImg = [{
                id: '1',
                img: 'e-ika.png'
            },
            {
                id: '2',
                img: 'cosmo.png'
            },
            {
                id: '3',
                img: 'dss.png'
            },
            {
                id: '4',
                img: 'supresso.png'
            },
            {
                id: '5',
                img: 'efarming.png'
            },
        ];

        $(document).ready(function() {

            AOS.init();

            $(window).scroll(function() {
                var scrollPosition = $(this).scrollTop(); // Get the current scroll position
                console.log(scrollPosition);

                if (scrollPosition >= 50) {
                    let rotate = scrollPosition - 50;
                    console.log(rotate);

                    $(".sc-exp-background").find('.star').css('transform', 'rotate(' + rotate * 0.2 + 'deg)');
                }
            });
        });

        function showPorto(el) {
            const id = $(el).data('id');
            console.log();
            if ($(`#porto-${id}`).length > 0) {
                $(`#porto-${id}`).hide(300, function() {
                    $(`#porto-${id}`).remove();
                });
            } else {

                let filterImg = listImg.filter(p => p.id == id);
                let img = "";
                if (filterImg.length > 0)
                    img = filterImg[0].img;

                $(el).after(`<div class=\"porto\" id=\"porto-${id}\" style=\"display:none;\">
                                <div>
                                    <img src="asset/images/${img}" class="shadow-lg">
                                </div>
                            </div>`);
                $(`#porto-${id}`).show(300, function() {
                    $(`#porto-${id} > div`).addClass('to-top-fixed');
                });
            }

        }
    </script>
</body>

</html>