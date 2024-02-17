<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
    <style>
        #profile-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));


            background-color: aqua;
            width: 1000px;

            gap: 20px;
            padding: 20px;
        }

        .profile {
            background-color: #f0f0f0;
            padding: 15px;
            border-radius: 8px;
            /*box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);*/
        }
    </style>
</head>

<body>
    <div id="profile-container"></div>
    <button onclick="addProfile()">Add Profile</button>
</body>

</html>

<script>    

function addProfile() {
    var profileContainer = document.getElementById("profile-container");

    var newProfile = document.createElement("div");
    newProfile.className = "profile";
    newProfile.textContent = "User Profile";
    
    var Img = document.createElement("img")
    Img.src = "https://static.vecteezy.com/system/resources/previews/020/765/399/non_2x/default-profile-account-unknown-icon-black-silhouette-free-vector.jpg"
    Img.width =  "100";
    Img.height = "100";
    
    newProfile.append(Img)

    profileContainer.appendChild(newProfile);

    var numProfiles = profileContainer.children.length;
    profileContainer.style.gridTemplateColumns = "repeat(auto-fill, minmax(200px, 1fr))";
}

</script>