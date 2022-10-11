                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content shadow-5-strong">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel">Register</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                            </div>
                            <div class="modal-body pt-5 px-5">
                                <form action="{{route('register')}}" method="post">
                                    @csrf
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                            <input type="text" id="firstname" class="form-control" name="firstname" value="{{old('firstname')}}" />
                                            <label class="form-label" for="form3Example1">First name</label>
                                            <span class="text-danger">
                                                @error('')
                                                {{message}}
                                                @enderror
                                            </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                            <input type="text" id="lastname" class="form-control" name="lastname" value="{{old('lastname')}}" />
                                            <label class="form-label" for="form3Example2">Last name</label>
                                            <span class="text-danger">
                                                @error('lastname')
                                                {{message}}
                                                @enderror
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input type="email" id="email" class="form-control" name="email" value="{{old('email')}}"/>
                                        <label class="form-label" for="form3Example3">Email address</label>
                                        <span class="text-danger">
                                            @error('email')
                                            {{message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input type="password" id="password" class="form-control" name="password" value="{{old('password')}}"/>
                                        <label class="form-label" for="form3Example4">Password</label>
                                        <span class="text-danger">
                                            @error('password')
                                            {{message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <!-- Checkbox -->
                                    <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                                        <label class="form-check-label" for="form2Example33">
                                            Subscribe to our newsletter
                                        </label>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-block mb-4">
                                    Sign up
                                    </button>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <span>Already have an account?</span>
                                <button class="btn" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Login</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                        </div>
                        <div class="modal-body pt-5 px-5">
                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="loginemail" class="form-control" name="email" />
                                    <label class="form-label" for="form3Example3">Email address</label>
                                    <span class="text-danger">
                                        @error('email')
                                        {{message}}
                                        @enderror
                                    </span>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="loginpassword" class="form-control" name="password" />
                                    <label class="form-label" for="form3Example4">Password</label>
                                    <span class="text-danger">
                                        @error('password')
                                        {{message}}
                                        @enderror
                                    </span>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-block mb-4">
                                Log in
                                </button>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Register</button>
                        </div>
                        </div>
                    </div>
                </div>
