<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1f2832e6c8748e6a985b4ff35d952d8f3054518b38c88a3b7efa9ca8915d2cff extends Twig_Template
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
        $__internal_f167e77e6ec154152fa99f0e100924ba1c46104e9148e154bc57e2cdb51f2d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f167e77e6ec154152fa99f0e100924ba1c46104e9148e154bc57e2cdb51f2d48->enter($__internal_f167e77e6ec154152fa99f0e100924ba1c46104e9148e154bc57e2cdb51f2d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d4c917dc863d17261cdafc8d2ab17d4c408ee92f2eaac854a1c75d0527f1cabd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c917dc863d17261cdafc8d2ab17d4c408ee92f2eaac854a1c75d0527f1cabd->enter($__internal_d4c917dc863d17261cdafc8d2ab17d4c408ee92f2eaac854a1c75d0527f1cabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f167e77e6ec154152fa99f0e100924ba1c46104e9148e154bc57e2cdb51f2d48->leave($__internal_f167e77e6ec154152fa99f0e100924ba1c46104e9148e154bc57e2cdb51f2d48_prof);

        
        $__internal_d4c917dc863d17261cdafc8d2ab17d4c408ee92f2eaac854a1c75d0527f1cabd->leave($__internal_d4c917dc863d17261cdafc8d2ab17d4c408ee92f2eaac854a1c75d0527f1cabd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
