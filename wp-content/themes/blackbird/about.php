<?php
/*
Template Name: About page
*/
?>

<?php get_header(); ?>
<div class="page-heading">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="clear"></div>
</div>
<!--Start Page Content -->
    <link href="/wp-content/themes/blackbird/css/bootstrap.min.css" type="text/css" rel="stylesheet"> 
    <link href="/wp-content/themes/blackbird/css/exec-styles.css" type="text/css" rel="stylesheet">
    <script src="/wp-content/themes/blackbird/js/jquery-1.10.2.min.js"></script>
    <script src="/wp-content/themes/blackbird/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function () { 
      $("#mayank").popover({trigger: "hover"});
      $("#rechung").popover({trigger: "hover"});
      $("#phoebe").popover({trigger: "hover"});
      $("#bobby").popover({trigger: "hover"});
      $("#cristina").popover({trigger: "hover"});
      $("#apurva").popover({trigger: "hover"});
      $("#john").popover({trigger: "hover"});
      $("#carlos").popover({trigger: "hover"});
      $("#jack").popover({trigger: "hover"});
      $("#sanjay").popover({trigger: "hover"});
      $("#bethany").popover({trigger: "hover"});
      $("#nora").popover({trigger: "hover"});
    });
    </script>
<div class="page-content-container">
    <div class="page-content">
      <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">Mission</a></li>
          <li><a href="#tab2" data-toggle="tab">About Us</a></li>
          <li><a href="#tab3" data-toggle="tab">Leadership</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade in active" id="tab1">
            <br>
            <p>SEED aims to provide growing social enterprises the support they need to achieve new levels of performance by pairing them with increasing student interest and the most up-to-date business tools and techniques.</p>
            <img class="aligncenter"  src="http://i.imgur.com/H00RDsh.gif" />
            <p>SEED was formed in 2008 by a group of passionate students committed to fostering sustainable development in communities around the world. Inspired by Muhammad Yunus, the father of microfinance, this group of students hoped to use their skills in finance, marketing and management to bring change to developing communities around the world.</p>
            <p>By developing a partnership with the McIntire School of Commerce (Rated #1 Business school by Business Week for 2009), SEED was able to utilize the full resources offered to them, while still maintaining the UVA motto of student self-governance. Thus SEED grew from a small group to one of the largest organizations under the McIntire School umbrella.</p>
            <p>With over 250+ members working on projects for NGOs around the world, SEED has now established itself in the University of Virginia community, attracting members from all schools and disciplines within the University. As SEED looks to the future, the focus still remains on the vision that was formed by the founding members.</p>
          </div>
          <div class="tab-pane fade" id="tab2">
            <br>
            <p>SEED is a passionate group of students committed to fostering sustainable development in communities around the world. We do this by giving free consulting services to NGOs and social entrepreneurs wherever they need us, with an emphasis on sound microfinance. By forging long-term relationships, we are able to increase the efficacy and efficiency of our partners, and intensify the positive social change in their communities.</p>
            <p>We also seek educational and personal development within the University of Virginia. Through working in teams to solve problems for our partners, students are able to broaden their knowledge horizons while actively practicing the skills they learn in class.</p>
            <img class="aligncenter" src="http://i.imgur.com/1mxY0ma.jpg" width="343" height="217" /> 
            <p>In short, our objectives are to:<p>
            <ol>
              <li>Provide support for small and start-up NGOs and social entrepreneurs that can potentially have a greater impact on their local communities,</li>
              <li>Facilitate the growth of motivated social entrepreneurs within the UVA community, and;</li>
              <li>Provide a channel for students to adopt a hands-on approach to learning while serving the community.</li>
            </ol>
          </div>
          <div class="tab-pane fade" id="tab3">
            <br>
            <div class="container">
              <ul class="exec" id="quad">
                <li class="exec exec-img">
                  <a href="#" id="mayank" data-content="Mayank is a third-year Economics and Foreign Affairs major originally from New Delhi, 
                  India but relocated to Charlottesville most recently from Geneva, Switzerland. During the summer of 2012, he was a trainee at PricewaterhouseCoopers 
                  (PwC) in the Risk Advisory Services (RAS) practice, working an audit for a $273 million client (in the energy and power storage business). He has 
                  experience in the consumer products industry as well, having interned at P&G in marketing. As SEED President; he leads the organization to continue 
                  to deliver high impact to a diverse portfolio of clients, provide the value adding and meaningful experience for students, and foster long term, mutually 
                  beneficial partnerships with local community stakeholders. " data-original-title="Mayank Bhatia"><img src="http://i.imgur.com/hePHHuC.jpg"></a>
                </li>
                <li class="exec exec-img">
                  <a href="#" id="rechung" data-content="Rechung is a third-year majoring in Commerce and concentrating in IT and marketing.
                   He is originally from Bhutan but was born and raised in the Philippines. In the past, he has interned with the Gross National Happiness
                   Commission in Bhutan and a small consulting company in China. As VP or projects, Rechung is in charge of overseeing all project-related
                   operations as well as setting up training workshops for members. " data-original-title="Rechung Penjor"><img src="http://i.imgur.com/fgdpU6X.jpg"></a>
                </li>
                <li class="exec exec-img">
                  <a href="#" id="phoebe" data-content="Phoebe Weatherall is a second-year pre-Commerce student from Wellesley, Massachusetts. Over the summer she worked
                  in content marketing for the online service company Care.com. As Vice President of Education, Phoebe's committed to exposing members to experts in the field
                  of social entrepreneurship and to spread SEED's mission throughout the University. " data-original-title="Phoebe Weatherall"><img src="http://i.imgur.com/3axkhFE.jpg"></a>
                </li>
                <li class="exec exec-img">
                  <a href="#" id="bobby" data-content="Bobby is a third-year Economics and Global Development Studies major. During the summer of 2012, he worked for Bank 
                  On Greater Charlottesville, an initiative to provide formal financial services to low-income residents. Since joining SEED as a Project Leader in his second
                  year, Bobby has developed a passion for social enterprise. As senior project director, Bobby develops new client relationships and secures high quality projects
                  for SEED teams. Also, Bobby looks forward to finding new ways for students to become involved in the field of social entrepreneurship at U.Va. " 
                  data-original-title="Bobby Donze"><img src="http://i.imgur.com/bHMMS5O.jpg"></a>
                </li>
              </ul>
              <ul class="exec" id="quad">
                <li class="exec exec-img">
                  <a href="#" id="cristina" data-content="Cristina is a third-year Global Development Studies and Spanish double major and Economics minor from Dallas, Texas.
                   She is excited to serve as one of SEED’s project directors this semester in charge of Original Life and Social Story. She has experience working for international
                   NGOs and corporate firms and hopes that will come in handy as she advises her teams. "
                  data-original-title="Cristina Yoder"><img src="http://i.imgur.com/211K2Qy.jpg"></a>
                </li>
                <li class="exec exec-img">
                  <a href="#" id="apurva" data-content="Apurva Pande is a third-year Foreign Affairs and Government major and Economics minor from Richmond, Virginia. Over the summer
                   of 2012, she researched development politics and peer institutions for the Vice Provost of Global Affairs. As Project Director, she is responsible for overseeing and 
                   advising several projects and for working with the teams to produce high-quality client deliverables. "
                  data-original-title="Apurva Pande"><img src="http://i.imgur.com/3j179KM.jpg"></a>
                </li>
                <li class="exec exec-img">
                  <a href="#" id="john" data-content="John is a second-year student from Lynchburg, Virginia studying Economics and Public Health. Over the summer of 2012,
                   he worked with a boutique Global Health Consulting firm. This summer, John is going to be working with MicroEnsure in Tanzania, a micro-insurance company
                   covering rural communities. As Project Director, his responsibilities are to manage several project teams and offer assistance when necessary, as well as 
                   discover new clients for partnership with SEED. "
                  data-original-title="John Burns"><img src="http://i.imgur.com/8fJajc4.jpg"></a>
                </li>
                <li class="exec exec-img">
                  <a href="#" id="carlos" data-content="Carlos is an American who spent most of his life in Brazil. He also lived in Belgium and Croatia, working as a professional
                   horseman. A 2nd year majoring in Politics with a focus on political theory, and a minor in Astronomy, Carlos has been a member of SEED since the Spring of 2012 and
                   has developed a passion for the organization and the meaningful work it provides to people around the world. He is very excited to aid incoming SEED consultants in 
                   producing great work. "
                  data-original-title="Carlos Pereira"><img src="http://i.imgur.com/6lfvLKc.jpg"></a>
                </li>
              </ul>
              <ul class="exec" id="quad">
                <li class="exec exec-img">
                  <a href="#" id="jack" data-content="Jack is a third-year Economics and Global Development Studies major from McLean, Virginia. During the summer of 2012, he worked as a 
                  research intern at Booz Allen Hamilton, providing support to the IRS Pre-Refund Program. He has been with SEED for two years now, serving first on the internal development
                  team, then as a Project Member for the National Utilities Diversity Council, and most recently as a Project Leader this past semester for Profugo. As a Project Director, Jack
                  looks forward to contributing to both the creation of quality deliverables and the continued growth of SEED at UVA."
                  data-original-title="Jack Sullivan"><img src="http://i.imgur.com/1P6ZeWU.png"></a>
                </li>
                <li class="exec exec-img">
                  <a href="#" id="sanjay" data-content="Sanjay Palat is a second-year hoping to double major in Economics and Commerce, originally from Long Island, New York. Over the summer 
                  of 2012, he interned at the office of Congressman Tim Bishop, and spent time traveling in India. Sanjay joined SEED as a Project Leader, and currently serves as Finance Chair. 
                  As Finance Chair, he is responsible for budgeting, fundraising, and identifying new sources of funding."
                  data-original-title="Sanjay Palat"><img src="http://i.imgur.com/Sb4wXBs.png"></a>
                </li>
                <li class="exec exec-img">
                  <a href="#" id="bethany" data-content="Bethany is a 2nd year hoping to concentrate in Finance and Management in the Commerce School. Last summer, she interned with North 
                  Dallas Shared Ministries to provide low-income families with services and financial assistance. She joined SEED in Fall 2011 as a project member working with Chaka Marketbridge, 
                  then continued as a project leader with Chaka in the Fall of 2012. As the new Alumni Relations Chair for SEED, she hopes to keep SEED alum more involved and connected with the 
                  organization's ongoing efforts." data-original-title="Bethany Berg"><img src="http://i.imgur.com/qEdl7fD.jpg"></a>
                </li>
                <li class="exec exec-img">
                  <a href="#" id="nora" data-content="Nora is a first year from New Jersey (not the Jersey Shore) planning on a double major in Politics and Economics. During the summer of 2012, 
                  she interned at a non-profit, Haiti Medical Education Project, working to provide a sustainable medical education system in Haiti. As secretary, Nora will work to connect the U.Va. 
                  community with SEED programs and events and will help to facilitate Executive Committee meetings." data-original-title="Nora Neus"><img src="http://i.imgur.com/yHwuEmX.jpg"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>