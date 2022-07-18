<style>
    :root {
        --level-one: translateZ(3em);
        --level-two: translateZ(6em);
        --level-three: translateZ(9em);

        --fw-normal: 400;
        --fw-bold: 700;

        --clr: white;

    }

    #why-us .card {
        cursor: default;
        height: 300px;
    }
    
    #why-us .card__content {
        text-align: center;
        position: relative;
        padding: 5em;
        transition: all 2.5s ease-in-out;
        transform-style: preserve-3d;
        height: 100%;
    }

    #why-us .card:hover .card__content {
        transform: rotateY(180deg);
    }

    #why-us .card__front,
    #why-us .card__back {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 1rem;
        backface-visibility: hidden;
        display: grid;
    }
    
    
    #why-us .card__front::before {
        content: '';
        position: absolute;
        --spacer: 1em;
        top: var(--spacer);
        bottom: var(--spacer);
        left: var(--spacer);
        right: var(--spacer);
        border: 3px solid currentColor;
        transform: var(--level-one);
    }

    #why-us .card__title {
        color: var(--clr);
        font-size: 1em;
        transform: var(--level-one);
        order: 2;
        text-transform: uppercase;
    }
    
    #why-us .card__subtitle {
        transform: var(--level-two);
        color: #e9f1ff;
        text-transform: uppercase;
        letter-spacing: 4px;
        font-size: 1.2em;
        font-weight: var(--fw-bold);
        opacity: .7;
        
    }
    
    #why-us .card__back .card__body {
        transform: translateZ(5em);
        font-weight: var(--fw-bold);
        font-size: 1em;
        line-height: 1.5;
    }
    
    #why-us .card__front {
        border-radius: 5px;
        color: #e9f1ff;
        background-color: rgb(99, 99, 110);
        background-image: url(./sdsiiwwefw%204.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-blend-mode: overlay;

    }
    
    #why-us .card__back {
        border-radius: 5px;
        transform: rotateY(180deg);
        color: #e9f1ff;
        background-color: #333;
    }
</style>

<div class="flex flex-wrap justify-center p-6" id="why-us">
    <div class="w-4/5">
        <div class="w-full md:w-2/3 mx-auto text-center">
            <h2>Why our Clients Love Us!</h2>
        </div>
        <div class="w-full">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-8 justify-center">
                <div class="shadow-lg">
                    <div class="card">
                        <div class="card__content">
                            <div class="card__front">
                                <h3 class="card__title">Get Best-in-Class Experience</h3>
                                <p class="card__subtitle">Top Expertise</p>
                            </div>
                            <div class="card__back">
                                <p class="card__body">Reach your objectives while our incredibly approachable Success Managers travel the route with you and the freelancer.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow-lg">
                    <div class="card">
                        <div class="card__content">
                            <div class="card__front">
                                <h3 class="card__title">Work Without Risk</h3>
                                <p class="card__subtitle">No more risks!</p>
                            </div>
                            <div class="card__back">
                                <p class="card__body">During the first week of our trial term, evaluate how well our freelancer fits. No questions asked, you won't be charged if you don't find it appropriate.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow-lg">
                    <div class="card">
                        <div class="card__content">
                            <div class="card__front">
                                <h3 class="card__title">Save Time & Effort</h3>
                                <p class="card__subtitle">Timely services</p>
                            </div>
                            <div class="card__back">
                                <p class="card__body">Our Solutions Experts carefully consider the details, hand-selecting freelancers, and only introduce you to those who are the most qualified for your job.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>