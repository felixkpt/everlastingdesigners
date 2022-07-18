<?php
$members = [
    ['name' => 'Phil Matt', 'image' => 'images/top-freelancers/1.jpg', 'description' => 'Senior Vue Developer', 'techstacks' => ['ios', 'swift', 'crypocurrency']],
    ['name' => 'Tonny Stan', 'image' => 'images/top-freelancers/2.jpg', 'description' => 'Full Stack PHP Developer', 'techstacks' => ['ios', 'swift', 'crypocurrency']],
    ['name' => 'Ben Kirkop', 'image' => 'images/top-freelancers/3.jpg', 'description' => 'Django Senior Engineer', 'techstacks' => ['ios', 'swift', 'crypocurrency']],
    ['name' => 'Wal De Mac', 'image' => 'images/top-freelancers/6.jpg', 'description' => 'Full Stack React Developer', 'techstacks' => ['ios', 'swift', 'crypocurrency']],
    ['name' => 'Wal De Mac', 'image' => 'images/top-freelancers/5.jpg', 'description' => 'JavaScript Front & Back Engineer', 'techstacks' => ['ios', 'swift', 'crypocurrency']],
];
?>

<style>
    #home-slider {
        display: grid;
        grid-template-columns: 50% 50%;
        gap: 10px;
    }


    @media screen and (max-width: 768px) {
        #home-slider {
            grid-template-columns: 100%;
            gap: 20px;
        }
    }

    #home-slider .left {}

    #home-slider .right {
        background: #d8dee8;
        position: relative;
        overflow: hidden;
        height: 500px;
        border-radius: 5px;
    }

    #home-slider .card {
        height: auto;
        width: 350px;
        border-radius: 5px;
        /* padding-top: 30%; */
    }

    .slider-container {
        width: 80%;
        height: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        overflow: hidden;
    }

    #home-slider .navigation {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 5px 10px;
    }

    .inner-slider {
        width: auto;
        height: 100%;
        display: flex;
        align-items: center;
        gap: 10px;
        pointer-events: none;
        position: absolute;
        top: 0;
        left: 0px;
        transition: all .5s ease-in;
    }

    .btn-left,
    .btn-right {
        padding: 20px 0;
        cursor: pointer;
    }

    .btn-left span {
        height: 0;
        border-top: solid 15px #d8dee8;
        border-right: solid 25px #9e99ba;
        border-bottom: solid 15px #d8dee8;
        width: 24px;
        display: block;
    }

    .btn-right span {
        height: 0;
        border-top: solid 15px #d8dee8;
        border-left: solid 25px #6e5aea;
        border-bottom: solid 15px #d8dee8;
        width: 24px;
        display: block;
    }

    #home-slider .description {
        margin: 15px 0;
        font-size: 1.2rem;
        color: #6e5aea;
        font-weight: 600;
    }
</style>
<div id="home-slider" class="p-3">
    <div class="left">
        <h2>Hire Freelance Developers & Designers Who Have Been Vetted</h2>
        <p>
            {{ SiteInfo::name() }} is a network of elite independent designers and developers who charge $20 to $60 per hour. Join the 53+ teams that have employed Our talent for a few months to several years!
        </p>
    </div>
    <div class="right">
        <div class="slider-container">
            <div class="inner-slider">
                @foreach ($members as $member)
                <div class="card shadow p-2">
                    <div class="w-full">
                        <img class="w-full h-72 rounded" src="{{ asset($member['image']) }}" alt="">
                    </div>
                    <div class="w-full">
                        <p class="description leading-relaxed">{{ $member['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="navigation">
            <div class="flex justify-between">
                <buttton class="btn-left"><span></span></buttton>
                <buttton class="btn-right"><span></span></buttton>
            </div>
        </div>
        <script>
            let sliderContainer = document.querySelector('.slider-container');
            let innerSlider = document.querySelector('.inner-slider');
            const btnLeft = document.querySelector('.btn-left span')
            const btnRight = document.querySelector('.btn-right span')

            let pressed = false;
            let startX;
            let x;

            sliderContainer.addEventListener('mousedown', (e) => {
                pressed = true
                startX = e.offsetX - innerSlider.offsetLeft
                // sliderContainer.style.cursor = 'grabbing'
            })

            sliderContainer.addEventListener("mouseenter", () => {
                // sliderContainer.style.cursor = "grab";
            });

            sliderContainer.addEventListener('mouseup', (e) => {
                // sliderContainer.style.cursor = 'grab';
                timeout('paused')
                pressed = false
            })

            sliderContainer.addEventListener('mousemove', (e) => {
                if (!pressed) return
                e.preventDefault()
                x = e.offsetX
                innerSlider.style.left = `${x - startX}px`;
                checkBoundary();
            })
            const checkBoundary = () => {
                let outer = sliderContainer.getBoundingClientRect();
                let inner = innerSlider.getBoundingClientRect();

                btnLeft.style.borderRightColor = '#6e5aea'
                if (parseInt(innerSlider.style.left) > 0) {
                    innerSlider.style.left = "0px";
                    btnLeft.style.borderRightColor = '#9e99ba'
                    btnRight.style.borderLeftColor = '#6e5aea'
                }

                if (inner.right < outer.right) {
                    btnRight.style.borderLeftColor = '#9e99ba'
                    btnLeft.style.borderRightColor = '#6e5aea'
                    innerSlider.style.left = `-${inner.width - outer.width}px`;
                }
            };

            const cardLength = 350;
            const gap = 10
            btnLeft.addEventListener('click', () => {
                timeout('paused')
                let outter = sliderContainer.getBoundingClientRect();
                let inner = innerSlider.getBoundingClientRect();
                startX = outter.x - inner.x
                innerSlider.style.left = `${cardLength - startX}px`;
                checkBoundary();
            })
            btnRight.addEventListener('click', () => {
                timeout('paused')
                let outter = sliderContainer.getBoundingClientRect();
                let inner = innerSlider.getBoundingClientRect();
                startX = inner.x - outter.x
                innerSlider.style.left = `-${cardLength - startX}px`;
                checkBoundary();
            })

            // sliding
            const cards = Array.from(innerSlider.querySelectorAll('.card'))
            let left = 0

            function timeout(index = 0) {
                if (index === 'paused') {
                    return
                }
                index++
                if (index === cards.length) {
                    index = 0
                    left = 0
                }

                setTimeout(function() {
                    val = `${left}px`
                    // console.log(index, val)
                    innerSlider.style.left = val
                    left = left - cardLength - gap
                    // create a recursive loop.
                    timeout(index);

                }, 5000);
            }
            timeout()
        </script>
    </div>
</div>