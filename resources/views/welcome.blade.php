<!DOCTYPE HTML>
<html>
<head>
    <title>Integration Experts</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta property="og:title" content="Integration Experts">
    <meta property="og:site_name" content="Integration Experts">
    <meta property="og:url" content="www.integrationexperts.io">
    <meta property="og:description" content="Simplifying your workflow by connecting software, enabling automation and converting manual processes to digital.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="images/integration_experts_screenshot.png">

    <link rel="stylesheet" href="css/main.css" />
    <noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>

    <script src="https://kit.fontawesome.com/9f4ddf884f.js" crossorigin="anonymous"></script>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="logo" style="padding-top: 6px;">
            <i style="font-size: 2rem;" class="fas fa-project-diagram"></i>
        </div>
        <div class="content">
            <div class="inner">
                <h1>Integration Experts</h1>
                <p>We'll connect your apps and automate your workflow.</p>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#work">Work</a></li>
                <li><a href="#contact">Contact</a></li>
                {{--<li><a href="#elements">Elements</a></li>--}}
            </ul>
        </nav>
    </header>

    <!-- Main -->
    <div id="main">

        <!-- Intro -->
        <article id="intro">
            <h2 class="major">Intro</h2>
            <span class="image main"><img src="images/pic01.jpg" alt="" /></span>
            <p>Connecting software is our specialty.</p>
            <p>Common integrations:
                <ul>
                    <li>Google Sheets</li>
                </ul>
            </p>
        </article>

        <!-- Work -->
        <article id="work">
            <h2 class="major">Work</h2>
            <div>
                <span class="image main"><a href="http://www.betbuddies.co" target="_blank"><img src="images/betbuddies_screenshot.png" alt="www.betbuddies.co" /></a></span>
                <h4>Bet Buddies</h4>
                <h6><a href="http://www.betbuddies.co" target="_blank">www.betbuddies.co</a></h6>
                <p><strong>Goal:</strong> To create a betting website where users can create custom bets without the need for 'the house' to take their money.</p>
                <p><strong>How it was done:</strong> Scores and spreads of games were gathered using the Odds API.</p>
                <p><strong>API's used:</strong> The Odds API</p>

            </div>
            <hr>
            <div>
                <span class="image main"><a href="http://www.findhighlights.com" target="_blank"><img src="images/findhighlights_screenshot.png" alt="www.findhighlights.com" /></a></span>
                <h4>Find Highlights</h4>
                <h6><a href="http://www.findhighlights.com" target="_blank">www.findhighlights.com</a></h6>
                <p><strong>Goal:</strong> To create a shareable gif or video of highlights as soon as they happen.</p>
                <p><strong>How it was done:</strong> During games a script runs that searches each team's twitter feed for any videos of the game. They regularly post ads so videos were verified to be in-game highlights by a machine learning API. Google Vision. The video is then converted to a gif where the gif and video are posted to the site as well as a twitter feed to create a curated feed of highlights.</p>
                <p><strong>API's used:</strong> Google Vision, Twitter, and Gyfcat</p>
            </div>
        </article>

        <!-- About -->
        <article id="about">
            <h2 class="major">About</h2>
            <span class="image main"><img src="images/laptop_on_desk.jpg" alt="" /></span>
            <p><strong>Who are we?</strong> We're a team of engineers located in the Atlanta, GA specializing in integrating all types of software to others from custom in-house to popular software such as Quickbooks or Excel.</p>
            <p><strong>How will it work?</strong> Contact us with a description of your goals. We'll reach out for a quick conversation and within 24-48 hours you'll receive an itemized quote and estimated timeline for the project.</p>
            <ul class="icons">
                <li><i class="fab fa-aws"></i></li>
                <li><i class="fab fa-cc-stripe"></i></li>
                <li><i class="far fa-file-excel"></i></li>
                <li><i class="fab fa-google"></i></li>
                <li><i class="fab fa-mailchimp"></i></li>
                <li><i class="fab fa-facebook"></i></li>
                <li><i class="fab fa-ebay"></i></li>
                <li><i class="fab fa-twitter"></i></li>
                <li><i class="fab fa-slack"></i></li>
                <li><i class="fab fa-amazon"></i></li>
            </ul>
        </article>

        <!-- Contact -->
        <article id="contact">
            <h2 class="major">Contact</h2>
            <p>Drop us a line, we'll review your goals and get in touch. After a quick discussion of your goals, we'll provide you with an itemized quote and estimated timeline to completion.</p>

            <form method="post" action="#">
                <div class="fields">
                    <div class="field half">
                        <label for="name">Name *</label>
                        <input type="text" name="name" id="name" required />
                    </div>
                    <div class="field">
                        <label for="email">Email *</label>
                        <input type="text" name="email" id="email" required/>
                    </div>
                    <div class="field half">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" />
                    </div>
                    <div class="field">
                        <label for="message">Describe your goals *</label>
                        <textarea name="message" id="message" rows="4" required></textarea>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Send Message" class="primary" /></li>
                    {{--<li><input type="reset" value="Reset" /></li>--}}
                </ul>
            </form>

        </article>

        <!-- Elements -->
        <article id="elements">
            <h2 class="major">Elements</h2>

            <section>
                <h3 class="major">Text</h3>
                <p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
                    This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
                    This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
                <hr />
                <h2>Heading Level 2</h2>
                <h3>Heading Level 3</h3>
                <h4>Heading Level 4</h4>
                <h5>Heading Level 5</h5>
                <h6>Heading Level 6</h6>
                <hr />
                <h4>Blockquote</h4>
                <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
                <h4>Preformatted</h4>
                <pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
            </section>

            <section>
                <h3 class="major">Lists</h3>

                <h4>Unordered</h4>
                <ul>
                    <li>Dolor pulvinar etiam.</li>
                    <li>Sagittis adipiscing.</li>
                    <li>Felis enim feugiat.</li>
                </ul>

                <h4>Alternate</h4>
                <ul class="alt">
                    <li>Dolor pulvinar etiam.</li>
                    <li>Sagittis adipiscing.</li>
                    <li>Felis enim feugiat.</li>
                </ul>

                <h4>Ordered</h4>
                <ol>
                    <li>Dolor pulvinar etiam.</li>
                    <li>Etiam vel felis viverra.</li>
                    <li>Felis enim feugiat.</li>
                    <li>Dolor pulvinar etiam.</li>
                    <li>Etiam vel felis lorem.</li>
                    <li>Felis enim et feugiat.</li>
                </ol>
                <h4>Icons</h4>
                <ul class="icons">
                    <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
                </ul>

                <h4>Actions</h4>
                <ul class="actions">
                    <li><a href="#" class="button primary">Default</a></li>
                    <li><a href="#" class="button">Default</a></li>
                </ul>
                <ul class="actions stacked">
                    <li><a href="#" class="button primary">Default</a></li>
                    <li><a href="#" class="button">Default</a></li>
                </ul>
            </section>

            <section>
                <h3 class="major">Table</h3>
                <h4>Default</h4>
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Item One</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>29.99</td>
                        </tr>
                        <tr>
                            <td>Item Two</td>
                            <td>Vis ac commodo adipiscing arcu aliquet.</td>
                            <td>19.99</td>
                        </tr>
                        <tr>
                            <td>Item Three</td>
                            <td> Morbi faucibus arcu accumsan lorem.</td>
                            <td>29.99</td>
                        </tr>
                        <tr>
                            <td>Item Four</td>
                            <td>Vitae integer tempus condimentum.</td>
                            <td>19.99</td>
                        </tr>
                        <tr>
                            <td>Item Five</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>29.99</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td>100.00</td>
                        </tr>
                        </tfoot>
                    </table>
                </div>

                <h4>Alternate</h4>
                <div class="table-wrapper">
                    <table class="alt">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Item One</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>29.99</td>
                        </tr>
                        <tr>
                            <td>Item Two</td>
                            <td>Vis ac commodo adipiscing arcu aliquet.</td>
                            <td>19.99</td>
                        </tr>
                        <tr>
                            <td>Item Three</td>
                            <td> Morbi faucibus arcu accumsan lorem.</td>
                            <td>29.99</td>
                        </tr>
                        <tr>
                            <td>Item Four</td>
                            <td>Vitae integer tempus condimentum.</td>
                            <td>19.99</td>
                        </tr>
                        <tr>
                            <td>Item Five</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>29.99</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td>100.00</td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </section>

            <section>
                <h3 class="major">Buttons</h3>
                <ul class="actions">
                    <li><a href="#" class="button primary">Primary</a></li>
                    <li><a href="#" class="button">Default</a></li>
                </ul>
                <ul class="actions">
                    <li><a href="#" class="button">Default</a></li>
                    <li><a href="#" class="button small">Small</a></li>
                </ul>
                <ul class="actions">
                    <li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
                    <li><a href="#" class="button icon solid fa-download">Icon</a></li>
                </ul>
                <ul class="actions">
                    <li><span class="button primary disabled">Disabled</span></li>
                    <li><span class="button disabled">Disabled</span></li>
                </ul>
            </section>

            <section>
                <h3 class="major">Form</h3>
                <form method="post" action="#">
                    <div class="fields">
                        <div class="field half">
                            <label for="demo-name">Name</label>
                            <input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
                        </div>
                        <div class="field half">
                            <label for="demo-email">Email</label>
                            <input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
                        </div>
                        <div class="field">
                            <label for="demo-category">Category</label>
                            <select name="demo-category" id="demo-category">
                                <option value="">-</option>
                                <option value="1">Manufacturing</option>
                                <option value="1">Shipping</option>
                                <option value="1">Administration</option>
                                <option value="1">Human Resources</option>
                            </select>
                        </div>
                        <div class="field half">
                            <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                            <label for="demo-priority-low">Low</label>
                        </div>
                        <div class="field half">
                            <input type="radio" id="demo-priority-high" name="demo-priority">
                            <label for="demo-priority-high">High</label>
                        </div>
                        <div class="field half">
                            <input type="checkbox" id="demo-copy" name="demo-copy">
                            <label for="demo-copy">Email me a copy</label>
                        </div>
                        <div class="field half">
                            <input type="checkbox" id="demo-human" name="demo-human" checked>
                            <label for="demo-human">Not a robot</label>
                        </div>
                        <div class="field">
                            <label for="demo-message">Message</label>
                            <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Send Message" class="primary" /></li>
                        <li><input type="reset" value="Reset" /></li>
                    </ul>
                </form>
            </section>

        </article>

    </div>

    <!-- Footer -->
    <footer id="footer">
        {{--<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>--}}
    </footer>

</div>

<!-- BG -->
<div id="bg"></div>

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/browser.min.js"></script>
<script src="js/breakpoints.min.js"></script>
<script src="js/util.js"></script>
<script src="js/main.js"></script>

</body>
</html>
