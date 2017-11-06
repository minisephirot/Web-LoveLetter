<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_050fd7f7fe1eecdedb1f25b19809d449b2f59f1c11c9218dc3af15709d46c53e extends Twig_Template
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
        $__internal_fa933ed3315cdae838636d1e2fe8ea0c82cec9fc26c02442c1c51cd1bbe8988b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa933ed3315cdae838636d1e2fe8ea0c82cec9fc26c02442c1c51cd1bbe8988b->enter($__internal_fa933ed3315cdae838636d1e2fe8ea0c82cec9fc26c02442c1c51cd1bbe8988b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_e0c21498476a4669f280aacf72fb574c9d0d0da17a218d9e51997dc9fc8d549d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c21498476a4669f280aacf72fb574c9d0d0da17a218d9e51997dc9fc8d549d->enter($__internal_e0c21498476a4669f280aacf72fb574c9d0d0da17a218d9e51997dc9fc8d549d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_fa933ed3315cdae838636d1e2fe8ea0c82cec9fc26c02442c1c51cd1bbe8988b->leave($__internal_fa933ed3315cdae838636d1e2fe8ea0c82cec9fc26c02442c1c51cd1bbe8988b_prof);

        
        $__internal_e0c21498476a4669f280aacf72fb574c9d0d0da17a218d9e51997dc9fc8d549d->leave($__internal_e0c21498476a4669f280aacf72fb574c9d0d0da17a218d9e51997dc9fc8d549d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
