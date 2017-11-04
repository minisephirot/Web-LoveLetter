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
        $__internal_c226fe146d6b6e90c1a6f3d0019b7e0a30b39e6e4cf2167e8ab2d47716aa77e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c226fe146d6b6e90c1a6f3d0019b7e0a30b39e6e4cf2167e8ab2d47716aa77e7->enter($__internal_c226fe146d6b6e90c1a6f3d0019b7e0a30b39e6e4cf2167e8ab2d47716aa77e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_27d5de712e25e218d21915a54f6383ada019e0e2d83b9ff14ea7b629dda1f811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d5de712e25e218d21915a54f6383ada019e0e2d83b9ff14ea7b629dda1f811->enter($__internal_27d5de712e25e218d21915a54f6383ada019e0e2d83b9ff14ea7b629dda1f811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c226fe146d6b6e90c1a6f3d0019b7e0a30b39e6e4cf2167e8ab2d47716aa77e7->leave($__internal_c226fe146d6b6e90c1a6f3d0019b7e0a30b39e6e4cf2167e8ab2d47716aa77e7_prof);

        
        $__internal_27d5de712e25e218d21915a54f6383ada019e0e2d83b9ff14ea7b629dda1f811->leave($__internal_27d5de712e25e218d21915a54f6383ada019e0e2d83b9ff14ea7b629dda1f811_prof);

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
