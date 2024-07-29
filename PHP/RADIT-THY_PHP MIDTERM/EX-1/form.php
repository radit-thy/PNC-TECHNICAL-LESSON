<div class="container mt-3">
    <div class="card">
        <div class="card-header text-center">
            STUDENT REGISTRATION
        </div>
        <div class="card-body">
            <form action="process.php" method="post">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="Username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="Username" name='username'>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="DateOfBirth" class="form-label">Date of birth</label>
                            <input type="date" class="form-control" id="DateOfBirth" name='birth_day'>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="Eamil" class="form-label">Eamil</label>
                            <input type="email" class="form-control" id="Eamil" name='email'>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="Password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="Password" name='password'>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <label for="Eamil" class="form-label">Gender</label>
                            <div class="col">
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="male"
                                            value='male'>
                                        <label class="form-check-label" for="male">
                                            Male
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="female"
                                            value='female'>
                                        <label class="form-check-label" for="female">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="Eamil" class="form-label">Province</label>
                            <select class="form-select form-select-sm" name='province'>
                                <option selected>Choose the province</option>
                                <option value="Banteay Meanchey">Banteay Meanchey</option>
                                <option value="Battambang">Battambang</option>
                                <option value="Kampong Thom">Kampong Thom</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <label class="form-label">Subjects</label>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name='subjects[]' value="PHP" id="php">
                                    <label class="form-check-label" for="php">
                                        PHP
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name='subjects[]' value="JS" id="js">
                                    <label class="form-check-label" for="js">
                                        JS
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name='subjects[]' value="Vue.js" id="vue.js">
                                    <label class="form-check-label" for="vue.js">
                                        Vue.js
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name='subjects[]' value="Laravel" id="laravel">
                                    <label class="form-check-label" for="laravel">
                                        Laravel
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="comment" class="form-label">Do you have any comment?</label>
                                <textarea class="form-control" id="comment" rows="3" name='comment'></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>