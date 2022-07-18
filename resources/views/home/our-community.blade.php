<?php
$members = [
    ['name' => 'Ben Kirkop', 'image' => 'images/top-freelancers/4.jpg', 'description' => 'A multidisciplinary designer with more than four years\' experience carrying out comprehensive design and research tasks. Nata has designed highly usable design solutions while doing in-depth user research and utilizing the concepts of human-centric design for both small businesses and established corporations. According to her, successful design begins with asking the appropriate questions.', 'techstacks' => ['ios', 'swift', 'crypocurrency']],
    ['name' => 'Tonny Stan', 'image' => 'images/top-freelancers/2.jpg', 'description' => '
    A Full Stack developer with 3+ years of experience across both large companies &amp; fast-growing tech startups. Initially a Rails loyalist, she has now developed a liking for NodeJS and has also dabbled in other JS frameworks. A graduate from IIT Kanpur, she wishes to explore the latest technologies while enjoying her off-time travelling.
    ', 'techstacks' => ['ios', 'swift', 'crypocurrency']],
    ['name' => 'Usla Kate', 'image' => 'images/top-freelancers/6.jpg', 'description' => 'She has more than six years of experience as a full stack developer with Jipswaa, South Africa Comms, Amazon, and other companies. For the past three years, she has also served as a remote consultant for software startups. She has deep knowledge of the Java ecosystem and specializes in designing and creating highly scalable, real-time JavaScript and NodeJS applications.', 'techstacks' => ['ios', 'swift', 'crypocurrency']],
    ['name' => 'Wal Aaserud', 'image' => 'images/top-freelancers/5.jpg', 'description' => 'Aaserud has worked in the IT business for 9 years as a backend engineer. He has created applications for many different areas over his career, including legal, transportation, etc. He is skilled in a variety of backend technologies, such as Ruby on Rails, Go, Java, PHP, and NodeJS. He has experience dealing with both service- and product-based businesses.', 'techstacks' => ['ios', 'swift', 'crypocurrency']],
];
?>
<style>
    #members-wrapper {
        position: relative;
        width: 60vw;
        margin: auto;
        height: 330px;
        overflow: hidden;
        min-width: max-content;
    }

    #members-slider {
        transition: all .5s ease-in;
        display: flex;
        flex-wrap: nowrap;
        gap: 16px;
        position: absolute;
        top: 0;
        left: 0;
    }

    #members-slider>div {
        border-radius: 5px;
        width: 60vw;
        overflow: hidden;
    }

    @media screen and (max-width: 768px) {
        #members-wrapper {
            min-height: 540px;
            width: 90vw;
        }

        #members-slider>div {
            width: 90vw;
        }

    }

    @media screen and (max-width: 576px) {

        #members-wrapper {
            min-height: 700px;
        }

    }

    #members-wrapper #navigation {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 5px 10px;
        text-align: center;
    }

    #members-wrapper #navigation li {
        display: inline;
        list-style-type: none;
        padding-right: 10px;
        position: relative;
        margin: 10px;
    }

    #members-wrapper #navigation li span {
        position: absolute;
        top: 0;
        left: 0;
        width: 20px;
        height: 20px;
        background: #9890c6;
        border-radius: 50%;
        cursor: pointer;
    }

    #members-wrapper #navigation li span.active {
        background: #6e5aea;
    }
</style>
<div class="w-full bg-white p-6">
    <h2 class="text-center">Meet {{ SiteInfo::name() }} Community</h2>
    <div id="members-wrapper">
        <div id="members-slider">
            @foreach ($members as $member)
            <div class="shadow-lg card p-3">
                <div class="flex flex-col md:flex-row p-3 gap-3">
                    <div class="w-full md:w-1/3">
                        <img class="w-full h-56 rounded" src="{{ asset($member['image']) }}" alt="">
                    </div>
                    <div class="w-full md:w-2/3 pointer-events-none">
                        <div class="flex gap-8 justify-center uppercase text-gray-600 font-medium">
                            @foreach ($member['techstacks'] as $techstack)
                            <div class="shadow-lg bg-gray-50 rounded-lg p-1">{{ $techstack }}</div>
                            @endforeach
                        </div>
                        <p class="leading-relaxed">{!! $member['description'] !!}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <ul id="navigation">
            @foreach ($members as $key => $member)
            <li><span class="indicator {{ $key === 0 ? 'active' : '' }}" data-indicator="{{ $key }}"></span></li>
            @endforeach

        </ul>

    </div>
</div>
<script>
    const membersWrapper = document.getElementById('members-wrapper')
    const membersSlider = document.getElementById('members-slider')

    membersSlider.addEventListener('mouseenter', function() {
        this.style.cursor = 'grab'
    })
    membersSlider.addEventListener('mousedown', function(e) {
        this.style.cursor = 'grabbing'
        pressed = true
        startX = e.offsetX - membersSlider.offsetLeft
        console.log(e)

    })
    membersSlider.addEventListener('mouseup', function() {
        pressed = false
        this.style.cursor = 'grab'
    })

    membersSlider.addEventListener('mousemove', (e) => {
        if (!pressed) return
        e.preventDefault()
        x = e.offsetX
        membersSlider.style.left = `${x - startX}px`;
        checkBounds();
    })
    const checkBounds = () => {
        let outer = membersWrapper.getBoundingClientRect();
        let inner = membersSlider.getBoundingClientRect();

        btnLeft.style.borderRightColor = '#6e5aea'
        if (parseInt(membersSlider.style.left) > 0) {
            membersSlider.style.left = "0px";
        }

        if (inner.right < outer.right) {
            membersSlider.style.left = `-${inner.width - outer.width}px`;
        }
    };

    const the_card = document.querySelector('#members-wrapper #members-slider .card')
    const cardWidth = the_card.getBoundingClientRect().width

    const indicators = document.querySelectorAll('#members-wrapper #navigation li span')
    indicators.forEach((node) => {
        node.addEventListener('click', () => {
            indicators.forEach((n) => {
                n.classList.remove('active')
            })
            node.classList.add('active')
            let l = (cardWidth + 16) * node.getAttribute('data-indicator')
            membersSlider.style.left = `-${l}px`;
        })
    })
</script>