<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_85a527809159d9dce60e3a745b8ef0f7f511cf4b834fb89125345f9cb2a7f785 extends Twig_Template
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
        $__internal_a754462eb69d1ba5a30b5da0f662475d38dc7d72bcdd5629ad84ccc09e1669f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a754462eb69d1ba5a30b5da0f662475d38dc7d72bcdd5629ad84ccc09e1669f1->enter($__internal_a754462eb69d1ba5a30b5da0f662475d38dc7d72bcdd5629ad84ccc09e1669f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_3b11a4a688c64c92986484003de3f4322360ca6d37e33dfb55a3f0d2dc8d7af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b11a4a688c64c92986484003de3f4322360ca6d37e33dfb55a3f0d2dc8d7af5->enter($__internal_3b11a4a688c64c92986484003de3f4322360ca6d37e33dfb55a3f0d2dc8d7af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a754462eb69d1ba5a30b5da0f662475d38dc7d72bcdd5629ad84ccc09e1669f1->leave($__internal_a754462eb69d1ba5a30b5da0f662475d38dc7d72bcdd5629ad84ccc09e1669f1_prof);

        
        $__internal_3b11a4a688c64c92986484003de3f4322360ca6d37e33dfb55a3f0d2dc8d7af5->leave($__internal_3b11a4a688c64c92986484003de3f4322360ca6d37e33dfb55a3f0d2dc8d7af5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
