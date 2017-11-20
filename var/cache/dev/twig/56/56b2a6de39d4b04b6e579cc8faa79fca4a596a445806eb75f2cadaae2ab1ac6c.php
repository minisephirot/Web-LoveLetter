<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_efa8fe722d237c6981e1c0477dcef812008c63abe60f0b39ba370e8842ff41e1 extends Twig_Template
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
        $__internal_46ea2199883862d46b77709005671b7bf1a98c3c0621ace390918e39670b27af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46ea2199883862d46b77709005671b7bf1a98c3c0621ace390918e39670b27af->enter($__internal_46ea2199883862d46b77709005671b7bf1a98c3c0621ace390918e39670b27af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_7296d73eee90902ac8a3954c6f7864901528d6bd6d6bc3211f3aa78bd2de2a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7296d73eee90902ac8a3954c6f7864901528d6bd6d6bc3211f3aa78bd2de2a93->enter($__internal_7296d73eee90902ac8a3954c6f7864901528d6bd6d6bc3211f3aa78bd2de2a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_46ea2199883862d46b77709005671b7bf1a98c3c0621ace390918e39670b27af->leave($__internal_46ea2199883862d46b77709005671b7bf1a98c3c0621ace390918e39670b27af_prof);

        
        $__internal_7296d73eee90902ac8a3954c6f7864901528d6bd6d6bc3211f3aa78bd2de2a93->leave($__internal_7296d73eee90902ac8a3954c6f7864901528d6bd6d6bc3211f3aa78bd2de2a93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
