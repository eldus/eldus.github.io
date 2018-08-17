## Device Accelerometer

https://gist.github.com/ximeg/587011a65d05f067a29ce9c22894d1d2

thresholding algorithm

z-score algorithm

https://stackoverflow.com/questions/22583391/peak-signal-detection-in-realtime-timeseries-data/22640362#22640362


On powering up the switch ,  calibrate()

Continuously read the data
analogRead(Xaxis);
analogRead(Yaxis);
analogRead(Zaxis);

 from accelerometer for three X, Y and Z axis.
//Calculate the total acceleration vector with respect to starting point i.e. where the calibration was called

Acceleration vector = squareroot(x^2+y^2+z^2)// w.r.t to to   xbar ybar zbar

Analyze the data for setting up a threshold
(we'll have further discussion  on how to set a threshold and count steps in next coming steps)

Detecting the threshold crossing :

if (totave[i]>threshhold && flag==0)
{ steps=steps+1; flag=1; } // if it crosses threshold increment step by one and raise the flag

else if (totave[i] > threshhold && flag==1) // if flag is raised and threshold is crossed , do nothing

{ //do nothing }

if (

totave[i] < threshhold && flag==1) // if flag is raised and threshold is not crossed , put that flag down.
{flag=0;}

If acc vector crosses threshold
count++

display steps

```
for (int i=0;i<100;i++){
    xval[i]=float(analogRead(xpin));
    sum=xval[i]+sum;
}
xavg=sum/100.0;

for (int i=0;i<100;i++){
  xaccl[i]=float(analogRead(xpin));
  delay(1);
  yaccl[i]=float(analogRead(ypin));
  delay(1);
  zaccl[i]=float(analogRead(zpin));
  delay(1);

   totvect[i] = sqrt(((xaccl[i]-xavg)* (xaccl[i]-xavg))+ ((yaccl[i] - yavg)*(yaccl[i] - yavg)) + ((zval[i] - zavg)*(zval[i] - zavg)));
   totave[i] = (totvect[i] + totvect[i-1]) / 2 ;
   //acc=acc+totave[i];
   Serial.println(totave[i]);
   delay(200);

  //cal steps
  if (totave[i]>threshhold && flag==0)
  {
    steps=steps+1;
    flag=1;

  }
   else if (totave[i] > threshhold && flag==1)
  {
  //do nothing
  }
    if (totave[i] <threshhold  && flag==1)
    {flag=0;}
    Serial.println('\n');
    Serial.print("steps=");
    Serial.println(steps);
  }


  //float tim=acc/100;
  //Serial.println(tim);
   delay(1000);
  // stepcal(totave);


}
```
LIS331DLH sensor manufactured by STMicroelectronics. is a 3-axis accelerometer that senses motion along three axes: x, y and z.

https://firstlinesoftware.com/outsourcery/16-counting-steps

Adaptiv: An Adaptive Jerk Pace Buffer Step Detection Algorithm
https://github.com/danielmurray/adaptiv

http://www.instructables.com/id/Simple-Easy-and-Cheap-DIY-Pedometer-with-Arduino/


https://github.com/MaximilianBuegler/node-pedometer/blob/master/src/pedometer.js

https://www.npmjs.com/package/pedometer

Findpeaks using MATLAB
https://www.mathworks.com/help/supportpkg/mobilesensor/examples/counting-steps-by-capturing-acceleration-data-from-your-android-device.html?prodcode=ML&requestedDomain=www.mathworks.com#zmw57dd0e386

A novel accelerometry-based algorithm for the detection of step durations over short episodes of gait in healthy elderly...
https://jneuroengrehab.biomedcentral.com/articles/10.1186/s12984-016-0145-6

Accelerometers are devices that measure acceleration, which is the rate of change of the velocity of an object. They measure in meters per second squared (m/s2) or in G-forces (g). A single G-force for us here on planet Earth is equivalent to 9.8 m/s2, but this does vary slightly with elevation (and will be a different value on different planets due to variations in gravitational pull). Accelerometers are useful for sensing vibrations in systems or for orientation applications.
https://learn.sparkfun.com/tutorials/accelerometer-basics
http://www.instructables.com/id/Accelerometer-Gyro-Tutorial/

There are many approaches to peak detection, but the simplest have the basic form...

if (y(i) > y(i-1)) && (y(i) > y(i+1))
sample i is a peak

Where y(i) indicates the i-th sample (the measurement at time i). Or, in other words, given three samples the middle sample is bigger than both its predecessor and its successor.

This approach is frequently augmented by adding a test to ensure that the values are above the mean (remember, we are in the presence of a 1G field, so the mean should not be zero).
http://classes.cec.wustl.edu/~cse132/weeks/9/studio/

Validity of Using Tri-Axial Accelerometers to Measure Human Movement
- Part I: Posture and Movement Detection
https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3866210/
– Part II: Step Counts at a Wide Range of Gait Velocities
https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4030415/

Step detection using multi- versus single tri-axial accelerometer-based systems
https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4838513/

Validation of the Fitbit One® for physical activity measurement at an upper torso attachment site
https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4828816/

Estimating Physical Activity and Sedentary Behavior in a Free-Living Context: A Pragmatic Comparison of Consumer-Based Activity Trackers and ActiGraph Accelerometry
https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5031913/

Behavior Change Techniques Implemented in Electronic Lifestyle Activity Monitors: A Systematic Content Analysis
https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4147713/


The objective was to examine the efficacy of adding a technology-based program to an in-person, behavioral weight loss intervention.
http://onlinelibrary.wiley.com/doi/10.1038/oby.2007.584/full
