<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1d5733cf16b809f77d7a26f88eb1980e3ea7e0eb69bb2930da0e4f997418905b extends Twig_Template
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
        $__internal_197a2066ed5de1eb4b797dd1c4e8837db63e037ddba1a7e277155956a8bac895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_197a2066ed5de1eb4b797dd1c4e8837db63e037ddba1a7e277155956a8bac895->enter($__internal_197a2066ed5de1eb4b797dd1c4e8837db63e037ddba1a7e277155956a8bac895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e462c1ed924c4d30a99a663d10f324df519f639b74efbd4dcd6ff97593715aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e462c1ed924c4d30a99a663d10f324df519f639b74efbd4dcd6ff97593715aaf->enter($__internal_e462c1ed924c4d30a99a663d10f324df519f639b74efbd4dcd6ff97593715aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_197a2066ed5de1eb4b797dd1c4e8837db63e037ddba1a7e277155956a8bac895->leave($__internal_197a2066ed5de1eb4b797dd1c4e8837db63e037ddba1a7e277155956a8bac895_prof);

        
        $__internal_e462c1ed924c4d30a99a663d10f324df519f639b74efbd4dcd6ff97593715aaf->leave($__internal_e462c1ed924c4d30a99a663d10f324df519f639b74efbd4dcd6ff97593715aaf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
