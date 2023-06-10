# Groovify
The music playing app that brings you songs you love by May Cooper, created from scratch using Javascript,  Python, MySQL, PHP, JQuery, Ajax, Apache, Jira for posting issues, and more.

You have the ability to upload music, click on albums, and play songs. Additionally, playlists can be created, modified, and songs can be added or removed from them. Navigating to artists' pages allows you to explore their songs and albums. Moreover, you can update details and search for music artists and albums.

First, we'll start with the registration page of the Groovify app. (Below is the finished product):

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/registrationPage.png" alt="registrationPage">

Turning on XAMPP:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/XAMPP1.png" alt="XAMPP1" width="550" height="300">
<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/XAMPP2.png" alt="XAMMP2" width="550" height="300">

Creating the PHP registration page:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/registrationCode.png" alt="registrationPage">

Second step, creating a required field on the login page & login page:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/loginPage.png" alt="loginPage">
<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/loginPageCode.png" alt="loginPageCoed">

Adding create account details and sign up form code: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/signUpFormCode.png" alt="SignUpCode">

The bare bones, rudimentary form of the sign up form: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/BasicForm.png" alt="testingForm">

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/signUpFormCode.png" alt="BasicForm">

Testing the login button with PHP:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/phpTest.png" alt="PHPTest">

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/testPhp.png" alt="testing">

Creating rules to stop possible trojan attempts through login software by putting constraints on type of data, as well as removing spaces:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/trojanProtection.png" alt="trojanProtection">

Creating a function to do this instead of repeating the code for all variables:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/trojanAllVariables.png" alt="trojanAllVariables">

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/allVariablesTrojan2.png" alt="trojanAllVariables2">

Creating free (obviously) account on bare-bones login structure I created:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/creatingAccount.png" alt="creatingAccount">

Creating validation for inputs such as email or name:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/validationForInputs.png" alt="validationForInputs">

Moving functions to an account class and making them a private class:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/privateClass.png" alt="privateClass">

Creating checks for PHP errors: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/phpErrors.png" alt="phpErrors">

Creating validation and constraints for the user's email: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/emailConstraints.png" alt="emailConstraints">
<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/emailConstraints2.png" alt="emailConstraints2">

Other than the fact that we need to style this, we’re checking if the error message shows up with the constraint for the username needing to be at least 4 characters:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/errorMessage.png" alt="errorMessage">

Login with new constraints: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/emailConstraintsLogin.png" alt="emailConstraintsLogin">

Testing error messages:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/errorMessageTest.png" alt="errorMessageTest">

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/errorMessageTest2.png" alt="errorMessageTest2">

We'll test the rudimentary error messages: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/rudimentaryErrorMessages.png" alt="rudimentaryErrorMessages">

Instead of manually having each error code show up, which can cause if issues if you change one letter and it doesn’t match the exact string, we’ll create a function that can be called per error, which is much easier to handle if there are errors in the first place:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/errorFunction.png" alt="errorFunction">

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/allFunctions.png" alt="allFunctions">

Creating constraints: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/constraints1.png" alt="constraints1">
<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/constraints2.png" alt="constraints2">

We’ll now create a function for the site to remember your login values. We’ll use the POST method for PHP to echo the last value the user inserted, like so: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/rememberingCredentials.png" alt="rememberingCredentials">

However, if I keep the code that way (above), and it’s a person’s first time signing up, errors might show up in the text box in regards to remembering a username, so we’ll create a function for it instead that will prevent the issue: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/rememberingCredentialsFirstTime.png" alt="rememberingCredentialsFirstTime">

Adding the function so that it would remember all values except the password: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/rememberingCredentialsExceptPass.png" alt="rememberingCredentialsExceptPass">

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/loginTest.png" alt="loginTest">

Now connecting MySQL database:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/mySQLStart.png" alt="mySQLStart">

Creating a database:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/creatingDb.png" alt="creatingDb"> 

Creating initial tables:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/mySQLTables.png" alt="mySQLTables">

Creating config file to connect to MySQL DB:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/configFile.png" alt="configFile">

Creating functions that will insert into the MySQL database:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/insertIntoMySQL.png" alt="insertIntoMySQL">

Making several tests to see that everything works and that the new user is written to the MySQL DB, and seeing hwo it appears in the MySQL DB, and seeing that the encrypted password inside the database was actually created:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/retestLogin.png" alt="retestLogin">

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/encryptedPasswordMySQL.png" alt="encryptedPasswordMySQL">

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/retestLogin2.png" alt="retestLogin2">

Creating code to check if username and email visitor input already exists:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/visitorInputAlreadyExists.png" alt="visitorInputAlreadyExists">

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/visitorInputAlreadyExists2.png" alt="visitorInputAlreadyExists2">

Creating login error:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/creatingLoginUser.png" alt="creatingLoginUser">

Creating session variables and redirects:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/creatingSessionVariables.png" alt="creatingSessionVariables">

Creating a page redirect that once you register your information and create an account, the site will redirect the user to the home page (now rudimentary still:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/pageRedirects.png" alt="pageRedirects">

Index.php page now redirects to register.php page, unless you login:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/redirects.png" alt="redirects">

Starting to style the login page:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/cssSnippet.png" alt="cssSnippet">

(Note that I changed the login/registration page image later on, which you see as the "final product" image at the top)

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/basicStyling.png" alt="basicStyling">

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/cssStyling.png" alt="cssStyling">

Creating input containers for the login page:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/creatingInputContainers.png" alt="creatingInputContainers">

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/creatingInputContainers2.png" alt="creatingInputContainers2">

Creating separate pages for login and sign up:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/separatePagesForLogin.png" alt="separatePagesForLogin">

Using JQuery to make separate pages for login and sign up:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/jQuerySnippet.png" alt="jQuerySnippet">

Separate pages for login and sign up shown here:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/loginPageSeparation.png" alt="loginPageSeparation">

And error messages may be seen:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/errorMessages.png" alt="errorMessages">

And working on the register_button with the document ready function:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/documentReady.png" alt="documentReady">

More styling, especially for error messages:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/moreStyling.png" alt="moreStyling">

Creating “Now Playing” bar on the bottom of the home page:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/playingButton.png" alt="playingButton">

(Very) humble beginnings for the home page: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/homePageStart.png" alt="homePageStart"> 

Creating now playing bar beginnings: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/creatingNowPlayingBar.png" alt="creatingNowPlayingBar">

Creating progress bar for the player, buttons, etc:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/progressBar.png" alt="progressBar">

Creating progress bar for the player, buttons, etc:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/progressBarCoding.png" alt="progressBarCoding">

Creating progress bar for the player, previous and next buttons, shuffle, repeat, adding a countdown timer: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/stylingProgressBar.png" alt="stylingProgressBar">

Styling progress bar for the song as it plays, and the countdown timer:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/addingProgressBarAndTime.png" alt="addingProgressBarAndTime">

Creating album artwork and floating text to the left code & results:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/codeAlbumArtwork.png" alt="codeAlbumArtwork">
<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/albumArtwork.png" alt="albumArtwork">

Now creating bar for volume:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/volumeBar.png" alt="volumeBar">

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/volumeBarResults.png" alt="volumeBarResults">

Creating the left navigation bar with the Groovify logo (yes, the camel is the "Groove" ;):

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/leftNavBar.png" alt="leftNavBar">

Underneath the logo, we’ll split the navigation bar into groups. 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/siteLinksCode.png" alt="siteLinksCode">

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/siteLinks.png" alt="siteLinks">

Creating songs table in MySQL phpMyAdmin:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/createTables.png" alt="createTables"> 
<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/createTablesResult.png" alt="createTablesResult"> 

Inserting songs into the database:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/insertingSongs.png" alt="insertingSongs"> 
<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/insertingSongsResult.png" alt="insertingSongsResult"> 
<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/insertIntoGenres.png" alt="insertIntoGenres">
<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/insertIntoArtists.png" alt="insertIntoArtists">

Styling left navigation bar with site links code:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/leftSectionStylingCode.png" alt="leftSectionStylingCode">

Result:
<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/leftSectionStylingResult.png" alt="leftSectionStylingResult">

Organising the header and footer folders away from the index code:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/gridViewContainer.png" alt="gridViewContainer">

Rudimentary result:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/gridViewContainerStyling.png" alt="gridViewContainerStyling">

Creating the first stages of showing the albums code:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/showingAlbums.png" alt="showingAlbums">

Album page beginnings: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/albumPageBeginnings.png" alt="albumPageBeginnings">

Adding more albums and styling of the album page:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/albumPageMoreAlbums.png" alt="albumPageMoreAlbums">

Passing an ID with the name of each album code, first with the Artist class:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/passingIdCode.png" alt="passingIdCode"> 

And the Album class:
<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/albumClassPassingId.png" alt="albumClassPassingId"> 

Testing result:
<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/passingId.png" alt="passingId"> 

Echoing artist name:
<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/echoingArtistName.png" alt="echoingArtistName"> 

Styling the artist name, album name, spacing, padding, margins, etc:
<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/stylingAlbumPage.png" alt="stylingAlbumPage"> 

Creating a while loop to loop through songs in an album, but not yet styled:
<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/loopingThroughSongsInAlbum.png" alt="loopingThroughSongsInAlbum"> 

Result:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/loopingThroughSongsInAlbumResult.png" alt="loopingThroughSongsInAlbumResult"> 

Adding duration to songs, as well as several other icons before styling: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/durationToSongsPreStyling.png" alt="durationToSongsPreStyling"> 

Posting issues on Jira:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/postingIssuesJira.png" alt="postingIssuesJira"> 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/postingIssuesJira2.png" alt="postingIssuesJira2"> 

Styling the internal album page that you'd see when you click on the album name:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/stylingInternalAlbumPage.png" alt="stylingInternalAlbumPage"> 

After styling, final product:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/internalAlbumPageStylingFinal.png" alt="internalAlbumPageStylingFinal"> 

Clicking into another album to see the styling across the site:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/internalAlbumPageStylingFinal2.png" alt="internalAlbumPageStylingFinal2"> 

Creating a javascript array for playing music, converting it to JSON through a PHP tag:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/jsArrayPhpTag.png" alt="jsArrayPhpTag"> 

Seeing the results of the array: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/seeingArrayResults.png" alt="seeingArrayResults"> 

Adding a JQuery object with Google-hosted ajax:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/jQueryObjectAjax.png" alt="jQueryObjectAjax"> 

Creating the playlist (track function) set up with the document block:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/creatingPlaylistTrackFunction.png" alt="creatingPlaylistTrackFunction"> 

Coming up with a technical issue: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/techIssue.png" alt="techIssue"> 

Creating Jira ticket for it:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/jiraIssue.png" alt="jiraIssue"> 

The issue was that the a function called setTrack that sets a new track for audioElement and plays was missing the definition of audioElement. 

To fix this, I created a new instance of the Audio object, created outside the setTrack function, to ensure it is accessible within the function. 

The setTrack function takes three parameters (trackId, newPlaylist, and play).

After setting the track using audioElement.setTrack, the code checks the play parameter. If it is true, it calls the play method of the audioElement.audio object to start playing the audio. 

This fixed the issue. 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/jiraProgress.png" alt="jiraProgress"> 

Created element for the play button function code:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/playButtonFunction.png" alt="playButtonFunction"> 

Now, we’re adding the pause and play functions:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/pauseAndPlayFunctions.png" alt="pauseAndPlayFunctions"> 

The setTrack function is responsible for setting the track of an audio element. It takes parameters such as the trackId, newPlaylist, and play. It sets the audio track to a specific file, "assets/music/bensound-clearday.mp3". If the play parameter is true, it also plays the audio.

The playSong function is used to start playing a song. It hides the "play" button and shows the "pause" button in the user interface using specific CSS classes. Additionally, it plays the audio by calling the play method on the audioElement.

Now we are going to change the hard-wiring of this one track for testing purposes, to ajax wiring: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/ajaxWiring1.png" alt="ajaxWiring1"> 
<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/ajaxWiring2.png" alt="ajaxWiring2"> 

Creating the getSongJson.php file:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/getJsonFilephp.png" alt="getJsonFilephp"> 

Testing that the arrays do in fact work:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/testingArrays.png" alt="testingArrays"> 

Placing the names of the artist, and the album automatically for each track, instead of having the placeholder for the artists there:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/artistAndAlbumNameAuto.png" alt="artistAndAlbumNameAuto"> 

Result:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/artistAndAlbumNameResult.png" alt="artistAndAlbumNameResult"> 

So now we’re going to create a function that will allow the user to continue the song at the same spot that they paused it before, instead of it just starting the song from the beginning.

This will also prevent the system from writing more than one play at that session for that user, which can lead to misleading counts on how many times the song was played.

A snippet of the code:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/songCountsCode.png" alt="songCountsCode"> 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/songCountsCode2.png" alt="songCountsCode2"> 

And creating the seconds countdown: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/secondsCountdown.png" alt="secondsCountdown"> 

Now we’re creating the function to show the countdown of the seconds as the song continues to play, and the remaining minutes the song has as it plays:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/secondsCountdownAsSongPlays.png" alt="secondsCountdownAsSongPlays">

Result of seconds remaining as the song plays:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/secondsCountdownAsSongPlaysResult.png" alt="secondsCountdownAsSongPlaysResult">

The event handlers are set up to handle mouse events (mousedown, mousemove, and mouseup) on the progress bar and volume bar.

In the case of the volume bar, the code calculates the percentage of the width where the mouse was clicked or moved (e.offsetX / $(this).width()) and sets the volume of the audio element accordingly. It also includes a check to ensure the volume stays within the valid range of 0 to 1.

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/nowPlayingBarPercentageCalc.png" alt="nowPlayingBarPercentageCalc">

Adding another ticket for the issue with the interaction with the play button: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/newJiraTicket.png" alt="newJiraTicket">

Volume bar for volume configured code:

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/volumeBarConfig.png" alt="volumeBarConfig">

Result for volume bar: 

<img src="https://github.com/MayCooper/Groovify/blob/master/projectImages/volumeBarConfigResult.png" alt="volumeBarConfigResult">



