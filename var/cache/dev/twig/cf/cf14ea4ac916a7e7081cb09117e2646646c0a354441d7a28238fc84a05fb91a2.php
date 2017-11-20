<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2f089b3a69169d1f04065670b6e6928fff13bb3b4137052a7be721311fd8ec82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f6441d9a06fdeb462faf0744f820f304a6a2ab298789d60c62c69b70dcc0f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f6441d9a06fdeb462faf0744f820f304a6a2ab298789d60c62c69b70dcc0f04->enter($__internal_3f6441d9a06fdeb462faf0744f820f304a6a2ab298789d60c62c69b70dcc0f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_bda2a3b878ceb3ee89cdd7a5ef46d81d547bf37a8c9240f93e033b52fff6b6f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda2a3b878ceb3ee89cdd7a5ef46d81d547bf37a8c9240f93e033b52fff6b6f9->enter($__internal_bda2a3b878ceb3ee89cdd7a5ef46d81d547bf37a8c9240f93e033b52fff6b6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3f6441d9a06fdeb462faf0744f820f304a6a2ab298789d60c62c69b70dcc0f04->leave($__internal_3f6441d9a06fdeb462faf0744f820f304a6a2ab298789d60c62c69b70dcc0f04_prof);

        
        $__internal_bda2a3b878ceb3ee89cdd7a5ef46d81d547bf37a8c9240f93e033b52fff6b6f9->leave($__internal_bda2a3b878ceb3ee89cdd7a5ef46d81d547bf37a8c9240f93e033b52fff6b6f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
