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
        $__internal_c4cc54720e9e9cb5a6d82796d511f281ebe8cfd2ee7deb03f9864493d523d4ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4cc54720e9e9cb5a6d82796d511f281ebe8cfd2ee7deb03f9864493d523d4ca->enter($__internal_c4cc54720e9e9cb5a6d82796d511f281ebe8cfd2ee7deb03f9864493d523d4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_44f3f7dd33176de788b521b9da495879d3d514378d1d39301a0e09f75e2be6e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f3f7dd33176de788b521b9da495879d3d514378d1d39301a0e09f75e2be6e1->enter($__internal_44f3f7dd33176de788b521b9da495879d3d514378d1d39301a0e09f75e2be6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c4cc54720e9e9cb5a6d82796d511f281ebe8cfd2ee7deb03f9864493d523d4ca->leave($__internal_c4cc54720e9e9cb5a6d82796d511f281ebe8cfd2ee7deb03f9864493d523d4ca_prof);

        
        $__internal_44f3f7dd33176de788b521b9da495879d3d514378d1d39301a0e09f75e2be6e1->leave($__internal_44f3f7dd33176de788b521b9da495879d3d514378d1d39301a0e09f75e2be6e1_prof);

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
