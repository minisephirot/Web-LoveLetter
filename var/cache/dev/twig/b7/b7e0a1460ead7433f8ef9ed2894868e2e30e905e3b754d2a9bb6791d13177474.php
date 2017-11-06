<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2480d9c1966356beaa1e4edbcac80596a0f5d4c8badf510a5b2e870f134231bc extends Twig_Template
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
        $__internal_24668dd0f889ec2810c94b150f2f2830d312f4543cdbcf33b8ccca0646c2a1ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24668dd0f889ec2810c94b150f2f2830d312f4543cdbcf33b8ccca0646c2a1ff->enter($__internal_24668dd0f889ec2810c94b150f2f2830d312f4543cdbcf33b8ccca0646c2a1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_bb570a15c860489af0cf4955ca7eff047b5152c9f81628fabb3ee5151e422e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb570a15c860489af0cf4955ca7eff047b5152c9f81628fabb3ee5151e422e93->enter($__internal_bb570a15c860489af0cf4955ca7eff047b5152c9f81628fabb3ee5151e422e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_24668dd0f889ec2810c94b150f2f2830d312f4543cdbcf33b8ccca0646c2a1ff->leave($__internal_24668dd0f889ec2810c94b150f2f2830d312f4543cdbcf33b8ccca0646c2a1ff_prof);

        
        $__internal_bb570a15c860489af0cf4955ca7eff047b5152c9f81628fabb3ee5151e422e93->leave($__internal_bb570a15c860489af0cf4955ca7eff047b5152c9f81628fabb3ee5151e422e93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
