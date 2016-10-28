<?php

/* SMLoginBundle::layout.html.twig */
class __TwigTemplate_690bb21ec41088e3a7f4486af2ef7487fa92fb271745eb8ff8a95a482b7f4a4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", "SMLoginBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    Homepage. ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
    ";
        // line 5
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SMLoginBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base1.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Homepage. {{ name }}*/
/*     {% block footer %}{% endblock %}*/
/* {% endblock %}*/
