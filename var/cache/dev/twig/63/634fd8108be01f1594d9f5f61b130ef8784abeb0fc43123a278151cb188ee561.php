<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_37c700f53b6bcab7bbfb1fa24ff609e3d301d6cf37c0fe36f2debb6af4fcbab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a19a30b1c96b1c848051bfbcde2143a5571277a0c3ca1eae0d27a626e20c5f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19a30b1c96b1c848051bfbcde2143a5571277a0c3ca1eae0d27a626e20c5f2c->enter($__internal_a19a30b1c96b1c848051bfbcde2143a5571277a0c3ca1eae0d27a626e20c5f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_878a8bd020136241592ebb084e7e2a13593d8fcd85965c6e7aa87f6611ae815d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878a8bd020136241592ebb084e7e2a13593d8fcd85965c6e7aa87f6611ae815d->enter($__internal_878a8bd020136241592ebb084e7e2a13593d8fcd85965c6e7aa87f6611ae815d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a19a30b1c96b1c848051bfbcde2143a5571277a0c3ca1eae0d27a626e20c5f2c->leave($__internal_a19a30b1c96b1c848051bfbcde2143a5571277a0c3ca1eae0d27a626e20c5f2c_prof);

        
        $__internal_878a8bd020136241592ebb084e7e2a13593d8fcd85965c6e7aa87f6611ae815d->leave($__internal_878a8bd020136241592ebb084e7e2a13593d8fcd85965c6e7aa87f6611ae815d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33dea8cae032f15ea96139c1f3c9cf552e63a8be00f14d985ce7bca5cb996f79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33dea8cae032f15ea96139c1f3c9cf552e63a8be00f14d985ce7bca5cb996f79->enter($__internal_33dea8cae032f15ea96139c1f3c9cf552e63a8be00f14d985ce7bca5cb996f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_04ea74e7d3ae4517d1ce9d0c99de7a0b336070b4499665d714164aed91cec8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ea74e7d3ae4517d1ce9d0c99de7a0b336070b4499665d714164aed91cec8d2->enter($__internal_04ea74e7d3ae4517d1ce9d0c99de7a0b336070b4499665d714164aed91cec8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_04ea74e7d3ae4517d1ce9d0c99de7a0b336070b4499665d714164aed91cec8d2->leave($__internal_04ea74e7d3ae4517d1ce9d0c99de7a0b336070b4499665d714164aed91cec8d2_prof);

        
        $__internal_33dea8cae032f15ea96139c1f3c9cf552e63a8be00f14d985ce7bca5cb996f79->leave($__internal_33dea8cae032f15ea96139c1f3c9cf552e63a8be00f14d985ce7bca5cb996f79_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
