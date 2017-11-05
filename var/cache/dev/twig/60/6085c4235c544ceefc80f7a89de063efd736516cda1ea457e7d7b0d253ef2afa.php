<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_58012c3dc7a5560e8553a854aa2eea0deaab9bc108adf38b98c9f74b14727bad extends Twig_Template
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
        $__internal_6c35db813b2e60915391f88427aaef62ac6cabdce62f59e2dc7c32798cc112a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c35db813b2e60915391f88427aaef62ac6cabdce62f59e2dc7c32798cc112a3->enter($__internal_6c35db813b2e60915391f88427aaef62ac6cabdce62f59e2dc7c32798cc112a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_ca7c0ec26d0fed735567b7cb1f89ea18b79c3d129a0c119e836da37c6677fffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7c0ec26d0fed735567b7cb1f89ea18b79c3d129a0c119e836da37c6677fffb->enter($__internal_ca7c0ec26d0fed735567b7cb1f89ea18b79c3d129a0c119e836da37c6677fffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6c35db813b2e60915391f88427aaef62ac6cabdce62f59e2dc7c32798cc112a3->leave($__internal_6c35db813b2e60915391f88427aaef62ac6cabdce62f59e2dc7c32798cc112a3_prof);

        
        $__internal_ca7c0ec26d0fed735567b7cb1f89ea18b79c3d129a0c119e836da37c6677fffb->leave($__internal_ca7c0ec26d0fed735567b7cb1f89ea18b79c3d129a0c119e836da37c6677fffb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
