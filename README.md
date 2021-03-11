# cordovauploadphoto
this app is how to send photo from mobile app(cordova) to server.

if the photo doesn't go to the server, add this code

<edit-config xmlns:android="http://schemas.android.com/apk/res/android" file="app/src/main/AndroidManifest.xml" mode="merge" target="/manifest/application"> 
        <application android:usesCleartextTraffic="true" /> 
</edit-config>

in config.xml file.
