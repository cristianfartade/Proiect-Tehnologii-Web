<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Compare page</title>
    <link rel="stylesheet" href="/MVC-Project/public/css/compare_style.css">
</head>

<body>
    <div class="hero">
        <div class="navbar">
            <a href="/MVC-Project/public/home">
                <img src="/MVC-Project/public/css/images/logo.png" alt="logo" class="logo" width="200" height="62">
            </a>
            <div class="buttons">
                <button class="btn-1" onclick="window.location.href='/MVC-Project/public/home'"><strong>Home</strong></button>
                <button class="btn-1" onclick="window.location.href='/MVC-Project/public/login'"><strong>Login / Sign-up</strong></button>
            </div>
        </div>
        <div class="forms">
            <div class="form-container">
                <!--First form-->


                <div class="formbox1">
                    <h2>Details for the first song!</h2>
                    <form class="form-1">

                        <div class="row">
                            <div class="col-25">
                                <label for="t1">Name of the song</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="t1" name="title1" placeholder="The title of the first song..">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="a1">Author</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="a1" name="author1" placeholder="First author..">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="l1">Length of the song (in minutes) </label>
                            </div>
                            <div class="col-75">
                                <input type="number" id="l1" name="length1" placeholder="First length...">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="tags1">Tags for the song (Write "," between them)</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="tags1" name="tags1" placeholder="First song tags..">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="g1">Genre of the first song</label>
                            </div>
                            <div class="col-75">
                                <select id="g1" name="genre1">
                                <option value="none">None</option>
                                <option value="rock">Rock</option>
                                <option value="pop">Pop</option>
                                <option value="electronic">Electronic</option>
                                <option value="rb">R&B</option>
                                <option value="latin">Latin</option>
                                <option value="reggae">Reggae</option>
                            </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="c1">Comments for the first song (Write "+" between them) </label>
                            </div>
                            <div class="col-75">
                                <textarea id="c1" name="comments1" placeholder="Write something.." style="height:50px"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <!--Second form-->


                <div class="formbox1">
                    <h2>Details for the second song!</h2>
                    <form class="form-2">

                        <div class="row">
                            <div class="col-25">
                                <label for="t2">Name of the song</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="t2" name="title2" placeholder="The title of the second song..">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="a2">Author</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="a2" name="author2" placeholder="Second author..">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="l2">Length of the song (in minutes) </label>
                            </div>
                            <div class="col-75">
                                <input type="number" id="l2" name="length2" placeholder="Second length...">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="tags2">Tags for the song (Write "," between them)</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="tags2" name="tags2" placeholder="Second song tags..">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="g2">Genre of the second song</label>
                            </div>
                            <div class="col-75">
                                <select id="g2" name="genre1">
                                <option value="none">None</option>
                                <option value="rock">Rock</option>
                                <option value="pop">Pop</option>
                                <option value="electronic">Electronic</option>
                                <option value="rb">R&B</option>
                                <option value="latin">Latin</option>
                                <option value="reggae">Reggae</option>
                            </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="c2">Comments for the second song (Write "+" between them) </label>
                            </div>
                            <div class="col-75">
                                <textarea id="c2" name="comments1" placeholder="Write something.." style="height:50px"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="send-button">
                <button class="btn-2" onclick="window.location.href='/MVC-Project/public/compare/result'"><strong>SEND THE
                        INFORMATION</strong></button>
            </div>
        </div>
    </div>

</body>

</html>