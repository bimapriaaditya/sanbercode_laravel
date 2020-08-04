<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru !</h1>
    <h2>Sign Up Form</h2>
    <div class="form">
        <form action="{{ route('home') }}" method="POST">
            @csrf
            <div>
                <label for="first"> First Name :</label>
                <div>&nbsp;</div>
                <input type="text">
                <div>&nbsp;</div>
            </div>
            <div>
                <label for="last">Last Name :</label>
                <div>&nbsp;</div>
                <input type="text">
                <div>&nbsp;</div>
            </div>
            <div>
                <label for="gender">Gender</label>
                <div>&nbsp;</div>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <br>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <br>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
                <br>
                <div>&nbsp;</div>
            </div>
            <div>
                <label for="nationality"> Nationality </label>
                <div>&nbsp;</div>
                <select name="nationality" id="nationality">
                    <option value="indonesia">Indonesia</option>
                    <option value="malaysia">Malaysia</option>
                    <option value="singapura">Singapura</option>
                    <option value="australia">Australia</option>
                    <option value="jepang">Jepang</option>
                </select>
                <div>&nbsp;</div>
            </div>

            <div>
                <label for="language">Language Spoken :</label>
                <div>&nbsp;</div>
                <input type="checkbox" id="bahasa" name="bahasa" value="bahasa">
                <label for="bahasa"> Bahasa Indoneisa </label>
                <br>
                <input type="checkbox" id="english" name="english" value="english">
                <label for="english"> Bahasa Inggris </label>
                <br>
                <input type="checkbox" id="japan" name="japan" value="japan">
                <label for="japan">Bahasa Jepang</label>
                <br>
                <input type="checkbox" id="other" name="other" value="other">
                <label for="other">Other</label>
                <div>&nbsp;</div>
            </div>

            <div>
                <label for="bio">Bio :</label>
                <div>&nbsp;</div>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>

            <div>
                <button>Sign Up</button>
            </div>
        </form>
    </div>
</body>
</html>