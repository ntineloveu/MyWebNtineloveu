<!DOCTYPE html>
<html>
  <?php
    $title_page = "NTINELOVEU - MY PROFILE";
    require_once 'header.php';
  ?>
  <body>
    <div class="container-fluid">

      <?php require_once 'top_header.php' ?>

      <div class="row content-myprofile">
        <div class="col-sm-5">
          <div class="row content-myprofile__picture text-center">
            <img class="profile-size" src="img/profile.jpeg" alt="" />
            <h3>Jittarin Rojanakhajonrachati</h3>
            <h5>Computer Science Student</h5>
          </div>
          <div class="row content-myprofile__detail">
            <div class="col-xs-12 font-size-12">

              <div class="section">
                <h4>
                  <div class="pic">
                    <img src="img/user-4-64.png" alt="" />
                  </div>
                  PERSONAL INFORMATION
                </h4>
                <span>Name : Jittarin Rojanakhajonrachati</span>
                <?php
                  //date in mm/dd/yyyy format; or it can be in other formats as well
                  $birthDate = "26/02/1995";
                  //explode the date to get month, day and year
                  $birthDate = explode("/", $birthDate);
                  //get age from date or birthdate
                  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                    ? ((date("Y") - $birthDate[2]) - 1)
                    : (date("Y") - $birthDate[2]));
                ?>
                <span>Age : <?php echo $age; ?></span>
                <span>Gender : Male</span>
                <span>Martial Status : Single</span>
                <span>Nationality : Thai</span>
              </div>

              <div class="section">
                <h4>
                  <div class="pic">
                    <img src="img/contacts-2-64.png" alt="" />
                  </div>
                  CONTACT ME
                </h4>
                <span>Email : Jittarin8857@gmail.com</span>
                <span>Tol : 084-532-XXXX</span>
                <span>Facebook : facebook.com/ntineloveu</span>
              </div>

              <div class="section">
                <h4>
                  <div class="pic">
                    <img src="img/chess-33-64.png" alt="" />
                  </div>
                  SKILL
                </h4>
                <span>
                  JAVA
                  <div class="progress" >
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
                  </div>
                </span>
                <span>
                  C/C++
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%"></div>
                  </div>
                </span>
                <span>
                  PHP
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%"></div>
                  </div>
                </span>
                <span>
                  RUBY
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:80%"></div>
                  </div>
                </span>
                <span>
                  PYTHON
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%"></div>
                  </div>
                </span>
                <span>
                  WEB DESIGN </br>(html, css, ajax, java-script, jquery)
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%"></div>
                  </div>
                </span>
                <span>
                  ANDROID
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%"></div>
                  </div>
                </span>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-7 content-myprofile__detail2 font-size-12">
          <div class="section">
            <h4>
              <div class="pic">
                <img src="img/idea-64.png" alt="" />
              </div>
              EXPERINCE
            </h4>
            <span><p>Chat Application (JAVA) Developer at KMITL</p></span>
            <span><p>Cooperative Application (ANDROID) Developer at KMITL</p></span>
            <span><p>Jun 2016 - Dec 2016</br>Internship Program at Thomson Reuters</p></span>
          </div>
          <div class="section">
            <h4>
              <div class="pic">
                <img src="img/graduation-cap-64.png" alt="" />
              </div>
              EDUCATION
            </h4>
            <span><p>2013 - Present</br>Bachelor&#39;s degree in Computer Science, University of King Mongkut&#39;s Institute of Technology Ladkrabang (KMITL), Thailand</p></span>
            <span><p>2007 - 2012</br>Science-Math-Computer, Matthayom Wat Benchamabophit High School, Thailand</p></span>
          </div>
          <div class="section">
            <h4>
              <div class="pic">
                <img src="img/globe-4-64.png" alt="" />
              </div>
              LANGUAGES
            </h4>
            <span>
              <div class="row">
                <div class="col-xs-6 text-center">
                  <img class="pic-languaes" src="img/th.png" alt="" />
                  <p>THAI</p>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                </div>
                <div class="col-xs-6 text-center">
                  <img class="pic-languaes" src="img/gb.png" alt="" />
                  <p>ENGLISH</p>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                  <i class="glyphicon glyphicon-star"></i>
                </div>
              </div>
            </span>
          </div>
        </div>
      </div>

    </div>
  </body>
</html>
