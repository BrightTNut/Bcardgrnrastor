<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome Page</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                background-image: url('/images/bfgif.gif');
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
               
            }
             nav{
                font-weight: bold;
                display: flex;
                background-color: white;
                opacity: 50%;
                margin: -10px;
                padding: .8rem;
               justify-content: space-between;
               font-size: 2rem;
             }
             nav div ul{
                list-style-type: none;
                text-transform: uppercase;
                font-size: 1rem;
                decoration:none;
                gap:2rem;
                display: flex;
                margin:50px;
             }
             .aboutcardheader{
                text-align: center;
             }
             .aboutcard{
                display: flex;
                justify-content: space-around;
             }
             .about{
                width: 40%;
                line-height: 2;
             }
            .category-list {
                display: flex;
                flex-wrap: wrap;
                margin: 9rem;
                padding: 9px;
                list-style-type: none;
                justify-content: center;
            }

            .img {
                width: 50px;
                height: 50px;
                background-color: #ffffff;
                border: 1px solid #ddd;
                border-radius: 5px;
                padding: 10px 15px;
                box-shadow: 12px 12px 16px 0 rgba(255, 255, 255, 0.3) inset,
                            -8px -8px 12px 0 rgba(0, 0, 0, 0.25) inset;
            }

            .category {
                display: flex;
                flex-direction: column;
                margin: 10px;
                text-align: center;
                color: black;
            }

            .header {
                text-align: center;
            }

            .clientlist {
                text-align: left;
                background-color: #ccd8f0;
            }

            .clientlistheader {
                padding: 3rem;
                text-align: center;
            }

            .democontainer {
                padding: 3rem;
            }

            .wrapper {
                overflow: hidden;
                position: relative;
                width: 100%;
                display: flex;
                align-items: center;
                padding: 0 20px;
            }

            .wrapper:before, .wrapper:after {
                content: "";
                position: absolute;
                height: 130px;
                width: 150px;
                z-index: 2;
            }

            .wrapper:after {
                right: 0;
                top: 0;
                transform: rotateZ(180deg);
            }

            .wrapper:before {
                left: 0;
                top: 0;
            }

            .wrapper .track {
                display: flex;
                width: calc(150px * 10);
                animation: scroll 15s 0.5s linear infinite;
            }

            .templates {
                display: grid;
                grid-template-columns: repeat(3, auto);
                gap: 1rem;
            }
            .templatessection {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.templatessection h1 {
    text-align: center;
    margin-bottom: 1rem;
}

.templates {
    display: grid;
    gap: 1rem;
    grid-template-columns: repeat(auto-fill, minmax(auto, auto));

}

.templates img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.morebutton {
    margin-top: 2rem;
    padding: 1rem 2rem;
    border-radius: 30px;
    background: blueviolet;
    color: white;
    border: none;
    cursor: pointer;
    box-shadow: inset 21px -21px 58px #777777, inset -21px 21px 58px #ffffff;
    transition: background 0.3s ease;
}

.morebutton:hover {
    background: darkviolet;
}
.template:hover{
   
box-shadow: inset -21px 21px 62px #5a5a5a,
            inset 21px -21px 62px #ffffff;
}
            @keyframes scroll {
                from {
                    transform: translateX(0);
                }
                to {
                    transform: translateX(calc(-150px * 5));
                }
            }
        </style>
    </head>
    <body>
        <div class="text-center p-8">
            <nav>
            <h1 class="header">Business Webpage Generating Website</h1>
            <div>
                <ul>
                    <li>categories</li>
                    <li> service</li>
                    <li> explore </li>
                    <li>price</li>
                    <li> help</li>
                    <li> designs</li>

                </ul>
            </div>
            </nav>
            <ul class="category-list">
                <li class="category"><img class="img" src="https://akam.cdn.jdmagicbox.com/images/icons/newwap/newhotkey/restaurant-2022.svg?w=96&q=75" alt="Italian Trulli"> Restaurants</li>
                <li class="category"><img class="img" src="https://akam.cdn.jdmagicbox.com/images/icons/newwap/newhotkey/hotel-2022.svg?w=96&q=75" alt="Italian Trulli"> Hotels</li>
                <li class="category"><img class="img" src="https://akam.cdn.jdmagicbox.com/images/icons/newwap/newhotkey/beauty.svg?w=96&q=75" alt="Italian Trulli"> Beauty Spa</li>
                <li class="category"><img class="img" src="https://akam.cdn.jdmagicbox.com/images/icons/newwap/newhotkey/restaurant-2022.svg?w=96&q=75" alt="Italian Trulli"> WEDDING</li>
                <li class="category"><img class="img" src="https://akam.cdn.jdmagicbox.com/images/icontent/newwap/web2022/hotkey_wedding_icon.gif?w=96&q=75" alt="Italian Trulli"> Wedding Planning</li>
                <li class="category"><img class="img" src="https://akam.cdn.jdmagicbox.com/images/icons/newwap/newhotkey/education.svg?w=96&q=75" alt="Italian Trulli"> Education</li>
                <li class="category"><img class="img" src="https://akam.cdn.jdmagicbox.com/images/icons/newwap/newhotkey/renthire.svg?w=96&q=755" alt="Italian Trulli"> Rent & Hire</li>
                <li class="category"><img class="img" src="https://akam.cdn.jdmagicbox.com/images/icons/newwap/newhotkey/hospital_2023.svg?w=96&q=75" alt="Italian Trulli"> Hospitals</li>
                <li class="category"><img class="img" src="https://akam.cdn.jdmagicbox.com/images/icons/newwap/newhotkey/contractor-2022.svg?w=96&q=75" alt="Italian Trulli"> Contractor</li>
                <li class="category"><img class="img" src="https://akam.cdn.jdmagicbox.com/images/icons/newwap/newhotkey/pg-hostels-rooms.svg?w=96&q=75" alt="Italian Trulli"> PG/Hostels</li>
                <li class="category"><img class="img" src="https://akam.cdn.jdmagicbox.com/images/icons/newwap/newhotkey/estate-agent.svg?w=96&q=75" alt="Italian Trulli"> Estate Agent</li>
                <li class="category"><img class="img" src="https://akam.cdn.jdmagicbox.com/images/icons/newwap/newhotkey/dentist_2023.svg?w=96&q=75" alt="Italian Trulli"> Dentists</li>
                <li class="category"><img class="img" src="https://akam.cdn.jdmagicbox.com/images/icons/newwap/newhotkey/homedecor.svg?w=96&q=75" alt="Italian Trulli"> Home Decor</li>
                <li class="category"><img class="img" src="https://akam.cdn.jdmagicbox.com/images/icons/newwap/newhotkey/gym_2023.svg?w=96&q=75" alt="Italian Trulli"> Gym</li>
                <li class="category"><img class="img" src="https://akam.cdn.jdmagicbox.com/images/icons/newwap/newhotkey/consultants_2023.svg?w=96&q=75" alt="Italian Trulli"> Consultants</li>
                <li class="category"><img class="img" src="https://akam.cdn.jdmagicbox.com/images/icons/newwap/newhotkey/eventorganizers.svg?w=96&q=75" alt="Italian Trulli"> Event Organisers</li>
                <li class="category"><img class="img" src="https://akam.cdn.jdmagicbox.com/images/icons/newwap/newhotkey/driving_school_2023.svg?w=96&q=75" alt="Italian Trulli"> Driving Schools</li>
                <li class="category"><img class="img" src="https://akam.cdn.jdmagicbox.com/images/icons/newwap/newhotkey/packers_movers_2023.svg?w=96&q=75" alt="Italian Trulli"> Packers & Movers</li>
            </ul>
            <div>
              <h1 class="aboutcardheader">Free Templates for Digital Business Cards</h1>  
              <div class="aboutcard">
                <div class="about">
                <h1>What is digital business card</h1>    
                <p>Digital business cards are more than just a way for people to contact you—they serve as a powerful personal brand builder. When you share your digital card with potential clients, prospects, or customers, it communicates who you are and the nature of your business.
<br/>
So, how do digital business cards achieve this? They include all the essential information needed for someone to get in touch with you. Unlike traditional physical cards, digital versions are cost-effective, convenient, and environmentally friendly. You can choose from a variety of pre-designed templates, customize elements such as the background, save, and share your card effortlessly.
<br/>
The process is straightforward for everyone involved. Sharing your digital business card helps to establish and enhance your brand identity, making a lasting impression on those you connect with.</p>
<button class="morebutton">CHOOSE YOUR TEMPLATE</button>
</div>
                <div><img src="{{ asset('images/carddemo.png') }}" alt="demo"/></div>
                
              </div>
            </div> 
            <div class="clientlist">
                <h1 class="clientlistheader">MAKE YOUR OWN DIGITAL BUSINESS CARD</h1>
                <div class="democontainer">
                    <div class="wrapper">
                        <div class="track">
                        <div><img src="{{ asset('images/carddemo.png') }}" alt="demo"/></div>
                        <div><img src="{{ asset('images/carddemo.png') }}" alt="demo"/></div>
                        <div><img src="{{ asset('images/carddemo.png') }}" alt="demo"/></div>
                        <div><img src="{{ asset('images/carddemo.png') }}" alt="demo"/></div>
                        <div><img src="{{ asset('images/carddemo.png') }}" alt="demo"/></div>
                        <div><img src="{{ asset('images/carddemo.png') }}" alt="demo"/></div>
                        <div><img src="{{ asset('images/carddemo.png') }}" alt="demo"/></div>
                        <div><img src="{{ asset('images/carddemo.png') }}" alt="demo"/></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="templatessection">
                <h1>CHOOSE FROM TEMPLATES</h1>
                <div class="templates">
                    <div class="template"><img src="{{ asset('images/carddemo.png') }}" alt="demo"/></div>
                    <div class="template"><img src="{{ asset('images/carddemo.png') }}" alt="demo"/></div>
                    <div class="template"><img src="{{ asset('images/carddemo.png') }}" alt="demo"/></div>
                    <div class="template"><img src="{{ asset('images/carddemo.png') }}" alt="demo"/></div>
                    <div class="template"><img src="{{ asset('images/carddemo.png') }}" alt="demo"/></div>
                    <div class="template"><img src="{{ asset('images/carddemo.png') }}" alt="demo"/></div>
                </div>
                <button class="morebutton">MORE</button>
            </div>
        </div>
    </body>
</html>
