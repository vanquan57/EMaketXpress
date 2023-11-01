@extends('admin.layouts.home')
@section('content')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>Profile</li>
            </ul>

        </div>
    </section>

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Profile
            </h1>

        </div>
    </section>

    <section class="section main-section">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 mb-6">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                        Edit Profile
                    </p>
                </header>
                <div class="card-content">
                    <form action="" method="POST">
                        @if (Session::has('errorUpdateInfo'))
                            <div class="transition-all errors_username text-[13px] text-[#FF0000] bg-[#F7D4DC] p-1">
                                <i class="fa-solid fa-triangle-exclamation"></i> {{ Session::get('errorUpdateInfo') }}
                            </div>
                        @endif
                        @if (Session::has('successUpdateInfo'))
                            <div class="transition-all success_message text-[13px] text-[#00FF00] bg-[#D4F7DC] p-1">
                                <i class="fa-solid fa-check-circle"></i> {{ Session::get('successUpdateInfo') }}
                            </div>
                        @endif
                        <div class="field">
                            <label class="label">Avatar</label>
                            <div class="field-body flex items-center">
                                <div class="field file">
                                    <label class="upload control">
                                        <a class="button blue h-10">
                                            Upload
                                        </a>
                                        <input type="file" name="avatar" id="avatarUpload">
                                    </label>
                                    <input type="text" name="newAvatar" id="newAvatar" hidden>
                                </div>
                                <div class="image w-40 h-40 mx-auto">
                                    <img id="avatarUploadProfile"
                                        src="https://avatars.dicebear.com/v2/initials/felicita-yundt.svg"class="rounded-full">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="field">
                            <label class="label">Name</label>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input type="text" autocomplete="on" name="username"
                                            value="@if (Auth::check()) {{ Auth::user()->username }} @endif"
                                            class="input" required>
                                    </div>
                                    <p class="help">Required. Your name</p>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">E-mail</label>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input type="email" autocomplete="on" name="email"
                                            value="@if (Auth::check()) {{ Auth::user()->email }} @endif"
                                            class="input" required>
                                    </div>
                                    <p class="help">Required. Your e-mail</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="field">
                            <div class="control">
                                <button type="submit" class="button green" name="formInfo">
                                    Submit
                                </button>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-account"></i></span>
                        Profile
                    </p>
                </header>
                <div class="card-content">
                    <div class="image w-48 h-48 mx-auto">
                        <img src="@if (Auth::check()) {{ Auth::user()->avatar }} @endif"
                            alt="@if (Auth::check()) {{ Auth::user()->username }} @endif"
                            class="rounded-full">
                    </div>
                    <hr>
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input type="text" readonly
                                value="@if (Auth::check()) {{ Auth::user()->username }} @endif"
                                class="input is-static">
                        </div>
                    </div>
                    <hr>
                    <div class="field">
                        <label class="label">E-mail</label>
                        <div class="control">
                            <input type="text" readonly
                                value="@if (Auth::check()) {{ Auth::user()->email }} @endif"
                                class="input is-static">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-lock"></i></span>
                    Change Password
                </p>
            </header>

            <div class="card-content">
                <form action="" method="POST">
                    <div class="field">
                        @if (Session::has('successMessage'))
                            <div class="transition-all success_message text-[13px] text-[#00FF00] bg-[#D4F7DC] p-1">
                                <i class="fa-solid fa-check-circle"></i> {{ Session::get('successMessage') }}
                            </div>
                        @endif
                        @if (Session::has('errorAuthPass'))
                            <div class="transition-all errors_username text-[13px] text-[#FF0000] bg-[#F7D4DC] p-1">
                                <i class="fa-solid fa-triangle-exclamation"></i> {{ Session::get('errorAuthPass') }}
                            </div>
                        @endif
                        <label class="label">Current password</label>
                        <div class="control">
                            <input type="password" name="password_current" autocomplete="current-password" class="input"
                                required>
                        </div>
                        <p class="help">Required. Your current password</p>
                    </div>
                    <hr>
                    <div class="field">
                        <label class="label">New password</label>
                        <div class="control">
                            <input type="password" autocomplete="new-password" name="password" class="input" required>
                        </div>
                        <p class="help">Required. New password</p>
                    </div>
                    @if (Session::has('errorConfirmPass'))
                        <div class="transition-all errors_username text-[13px] text-[#FF0000] bg-[#F7D4DC] p-1">
                            {{ Session::get('errorConfirmPass') }}
                        </div>
                    @endif
                    <div class="field">
                        <label class="label">Confirm password</label>
                        <div class="control">
                            <input type="password" autocomplete="new-password" name="password_confirmation"
                                class="input" required>
                        </div>
                        <p class="help">Required. New password one more time</p>
                    </div>
                    <hr>
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button green" name="formResetPassword">
                                Submit
                            </button>
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </section>


    <div id="sample-modal" class="modal">
        <div class="modal-background --jb-modal-close"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Sample modal</p>
            </header>
            <section class="modal-card-body">
                <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
                <p>This is sample modal</p>
            </section>
            <footer class="modal-card-foot">
                <button class="button --jb-modal-close">Cancel</button>
                <button class="button red --jb-modal-close">Confirm</button>
            </footer>
        </div>
    </div>

    <div id="sample-modal-2" class="modal">
        <div class="modal-background --jb-modal-close"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Sample modal</p>
            </header>
            <section class="modal-card-body">
                <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
                <p>This is sample modal</p>
            </section>
            <footer class="modal-card-foot">
                <button class="button --jb-modal-close">Cancel</button>
                <button class="button blue --jb-modal-close">Confirm</button>
            </footer>
        </div>
    </div>
@endsection
