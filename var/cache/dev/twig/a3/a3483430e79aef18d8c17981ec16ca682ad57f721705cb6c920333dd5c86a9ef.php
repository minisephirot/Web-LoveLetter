<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_23b26384ccfbdfc3ac637202e8fd19023c137c038b34d43c28c1336569ae6970 extends Twig_Template
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
        $__internal_c58dda582ef52348e513b2b90cc266b22fb44851997b3ce8f2a43f2d62dddf4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c58dda582ef52348e513b2b90cc266b22fb44851997b3ce8f2a43f2d62dddf4c->enter($__internal_c58dda582ef52348e513b2b90cc266b22fb44851997b3ce8f2a43f2d62dddf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_0f6ceb702cd1e6dd32e3578f8a96626ba1d711867cb45bd97d933d7823ad2bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6ceb702cd1e6dd32e3578f8a96626ba1d711867cb45bd97d933d7823ad2bfe->enter($__internal_0f6ceb702cd1e6dd32e3578f8a96626ba1d711867cb45bd97d933d7823ad2bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c58dda582ef52348e513b2b90cc266b22fb44851997b3ce8f2a43f2d62dddf4c->leave($__internal_c58dda582ef52348e513b2b90cc266b22fb44851997b3ce8f2a43f2d62dddf4c_prof);

        
        $__internal_0f6ceb702cd1e6dd32e3578f8a96626ba1d711867cb45bd97d933d7823ad2bfe->leave($__internal_0f6ceb702cd1e6dd32e3578f8a96626ba1d711867cb45bd97d933d7823ad2bfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
