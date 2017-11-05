<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_165f3744fdb2b14823a83419f62990e40437d77de85ee0cde4b7b293e263ff34 extends Twig_Template
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
        $__internal_dfa5c5bb536bc8679c7e356aebbd60e9cb2fc483c52b511fba93155ff7750d71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa5c5bb536bc8679c7e356aebbd60e9cb2fc483c52b511fba93155ff7750d71->enter($__internal_dfa5c5bb536bc8679c7e356aebbd60e9cb2fc483c52b511fba93155ff7750d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a26c504b886f741614b331a823375cbe740d0399c379dde9a394c2ae67fb6dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26c504b886f741614b331a823375cbe740d0399c379dde9a394c2ae67fb6dce->enter($__internal_a26c504b886f741614b331a823375cbe740d0399c379dde9a394c2ae67fb6dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_dfa5c5bb536bc8679c7e356aebbd60e9cb2fc483c52b511fba93155ff7750d71->leave($__internal_dfa5c5bb536bc8679c7e356aebbd60e9cb2fc483c52b511fba93155ff7750d71_prof);

        
        $__internal_a26c504b886f741614b331a823375cbe740d0399c379dde9a394c2ae67fb6dce->leave($__internal_a26c504b886f741614b331a823375cbe740d0399c379dde9a394c2ae67fb6dce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
