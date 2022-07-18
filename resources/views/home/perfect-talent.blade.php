<style>
    #perfect-talent .card {
        padding: 22px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    #perfect-talent ul li {
        list-style-type: circle;
        list-style-position: inside;
    }

    #perfect-talent .rate-range {
        display: inline;
        width: max-content;
        margin: 10px;
        padding: 10px 30px;
        border-radius: 10px;
        background: #fefefe;
        transition: transform 500ms ease-in;
        cursor: pointer;
    }
    .rate-range:hover {
        transform: translate3D(-2px, 2px, 10px);
    }
</style>
<div id="perfect-talent" class="w-full bg-white p-6 my-3">
    <h2 class="text-center">Find the ideal candidate for your team at a reasonable cost.</h2>
    <h3 class="text-center text-secondary">Credentialed. Experience. Professional</h3>
    <div class="w-full lg:w-4/5 mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-8 justify-center">
            <div class="shadow-lg bg-gray-100">
                <div class="card">
                    <h4>Single Participant</h4>
                    <ul>
                        <li>1-2 years of experience</li>
                        <li>Mostly worked on a single stack</li>
                        <li>Top Individual Contribut</li>
                    </ul>
                    <p class="rate-range shadow">$15 - $40 per hour</p>
                </div>
            </div>
            <div class="shadow-lg bg-gray-100">
                <div class="card">
                    <h4>Wide-ranging Contributor</h4>
                    <ul>
                        <li>2 to 5 years of expertise</li>
                        <li>Knowledge of numerous stacks</li>
                        <li>Developed specialty skills</li>
                        <li>Junior Members' Mentors</li>
                    </ul>
                    <p class="rate-range shadow">$15 - $40 per hour</p>
                </div>
            </div>
            <div class="shadow-lg bg-gray-100">
                <div class="card">
                    <h4>Single Participant</h4>
                    <ul>
                        <li>7–10 years' experience or more</li>
                        <li>Spanning stacks and products</li>
                        <li>Many specialized abilities</li>
                        <li>Knowledge of managing teams</li>
                    </ul>
                    <p class="rate-range shadow">$15 - $40 per hour</p>
                </div>
            </div>
        </div>
    </div>
</div>