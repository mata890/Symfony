<?php

/* SMLoginBundle:Login:loginForm.html.twig */
class __TwigTemplate_26b14339ed67e42787455a9a098a30b7d643531a232e72ece8a2fe5962d02c18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SMLoginBundle::layout.html.twig", "SMLoginBundle:Login:loginForm.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SMLoginBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"ch-container\">
        <div class=\"row\">

            <div class=\"row\">
                <div class=\"col-md-12 center login-header\">
                    <h2>Welcome:  </h2>
                </div>
                <!--/span-->
            </div><!--/row-->

            <div class=\"row\">
                <div class=\"well col-md-5 center login-box\">
                    <div class=\"alert alert-info\">
                        Please login with your Username and Password.
                    </div>
                    <form class=\"form-horizontal\" action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("sm_login_homepage");
        echo "\" method=\"POST\" >
                        <fieldset>
                            <div class=\"input-group input-group-lg\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user red\"></i></span>
                                <input type=\"text\" class=\"form-control\" name=\"login\" placeholder=\"Username\">
                            </div>
                            <div class=\"clearfix\"></div><br>

                            <div class=\"input-group input-group-lg\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock red\"></i></span>
                                <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\">
                            </div>
                            <div class=\"clearfix\"></div>

                            <div class=\"input-prepend\">
                                <label class=\"remember\" for=\"remember\"><input type=\"checkbox\" name=\"sesouvenir\" value=\"sesouvenir\" id=\"remember\"> Se souvenir</label>
                            </div>
                            <div class=\"clearfix\"></div>

                            <p class=\"center col-md-5\">
                                <button type=\"submit\" class=\"btn btn-primary\">Sign in</button>

                            </p>

                        </fieldset>
                    </form>

                </div>
                <!--/span-->

            ";
        // line 48
        if (array_key_exists("name", $context)) {
            // line 49
            echo "
                <div class=\"alert alert-danger fade in col-md-5 center\">
                <p class=\"center col-md-5\">  ";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo ". </p>
                </div>
            ";
        }
        // line 54
        echo "
            </div><!--/row-->
        </div><!--/fluid-row-->

    </div>
";
    }

    public function getTemplateName()
    {
        return "SMLoginBundle:Login:loginForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 54,  87 => 51,  83 => 49,  81 => 48,  48 => 18,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "SMLoginBundle::layout.html.twig" %}*/
/* {% block container %}*/
/*     <div class="ch-container">*/
/*         <div class="row">*/
/* */
/*             <div class="row">*/
/*                 <div class="col-md-12 center login-header">*/
/*                     <h2>Welcome:  </h2>*/
/*                 </div>*/
/*                 <!--/span-->*/
/*             </div><!--/row-->*/
/* */
/*             <div class="row">*/
/*                 <div class="well col-md-5 center login-box">*/
/*                     <div class="alert alert-info">*/
/*                         Please login with your Username and Password.*/
/*                     </div>*/
/*                     <form class="form-horizontal" action="{{ path ('sm_login_homepage') }}" method="POST" >*/
/*                         <fieldset>*/
/*                             <div class="input-group input-group-lg">*/
/*                                 <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>*/
/*                                 <input type="text" class="form-control" name="login" placeholder="Username">*/
/*                             </div>*/
/*                             <div class="clearfix"></div><br>*/
/* */
/*                             <div class="input-group input-group-lg">*/
/*                                 <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>*/
/*                                 <input type="password" class="form-control" name="password" placeholder="Password">*/
/*                             </div>*/
/*                             <div class="clearfix"></div>*/
/* */
/*                             <div class="input-prepend">*/
/*                                 <label class="remember" for="remember"><input type="checkbox" name="sesouvenir" value="sesouvenir" id="remember"> Se souvenir</label>*/
/*                             </div>*/
/*                             <div class="clearfix"></div>*/
/* */
/*                             <p class="center col-md-5">*/
/*                                 <button type="submit" class="btn btn-primary">Sign in</button>*/
/* */
/*                             </p>*/
/* */
/*                         </fieldset>*/
/*                     </form>*/
/* */
/*                 </div>*/
/*                 <!--/span-->*/
/* */
/*             {% if name is defined %}*/
/* */
/*                 <div class="alert alert-danger fade in col-md-5 center">*/
/*                 <p class="center col-md-5">  {{ name }}. </p>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             </div><!--/row-->*/
/*         </div><!--/fluid-row-->*/
/* */
/*     </div>*/
/* {% endblock %}*/
