# Automatic License Plate Recognition 

This software solution was implemented as a Senior Design Project of Computer Science Bachelor Degree. We developed a solution for the automatic detection and recognition of Azerbaijani license plates. The purpose was to automate the entrance process of the vehicles to the university, however, it can also be used for general purposes.

Project can be described as consisting of 2 different modules. 
<ul>
<li>
<h3>License Plate Detection and Character Recognition</h3>

The first part consists of Object Detection and Character Recognition and is implemented in Python. A pre-trained HAAR Cascade Classifier was used to achieve proper object detection of car license plates. Afterward, we used Tesseract optical recognition tool to recognize the characters on the plate. The information is then passed to the backend.
</li>
<li>
<h3>Website(Management panel)</h3>
The back-end part was responsible for several tasks which include the establishment of user and car profiles, and management of car access to the specific property. Admin can grant different permissions for different vehicles(identified by their license plate number) which basically dictates when they are allowed to access the building. 
</li>
</ul>
